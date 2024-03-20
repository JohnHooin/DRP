<?
namespace App\Operations;
use App\Controllers\Dialog;

class RecipeCreateOperation extends DatabaseRelatedOperation implements I_CreateAndUpdateOperation
{
  public function __construct() {
    parent::__construct();
  }

  static public function notify(string $message) : void {
    Dialog::show($message);
  }


  /**
   * Validates the recipe data with specific rules.
   *
   * @param array $data The recipe data to be validated.
   * @return void
   * @throws \InvalidArgumentException If the data is invalid.
   * @throws \Exception If the data is missing or does not meet the validation rules.
   */
  static public function validateData(array $data) : void
  {
    // Validate data
    if ($data == null) {
      throw new \InvalidArgumentException("Invalid data provided in " . __METHOD__ . ".");
    }

    $validCategories1 = ['Breakfast', 'Lunch', 'Dinner'];
    $validCategories2 = ['Appetizer', 'Main Dish', 'Side Dish', 'Dessert'];
    $validCategories3 = ['Baked', 'Salad and Salad Dressing', 'Sauce and Condiment', 'Snack', 'Beverage', 'Soup', 'Other'];

    if (
      empty($data['name']) || 
      !preg_match('/^[a-zA-Z0-9\s.,]+$/', $data['name']) ||
      empty($data['cooking_time_min']) ||
      empty($data['preparation_time_min']) ||
      empty($data['meal_type_1']) ||
      empty($data['meal_type_2']) ||
      empty($data['directions']) ||
      empty($data['description']) ||
      empty($data['meal_type_3']) ||
      empty($data['ingredientComponents'])) {
      throw new \Exception("Invalid data provided in " . __METHOD__ . ".");
    }
    if(  (!in_array($data['meal_type_1'], $validCategories1)) ||
      (!in_array($data['meal_type_2'], $validCategories2)) ||
      (!in_array($data['meal_type_3'], $validCategories3))
    ) {
      throw new \Exception("Invalid data provided in " . __METHOD__ . ".");
    }
  }


  /**
   * Saves the recipe data to the database.
   *
   * @param array $data The recipe data to be saved.
   * @return void
   * @throws \PDOException If there is an error connecting to the database.
   */
  static public function saveToDatabase(array $data) : void {
    $model = new static();
    $conn = $model->DB_CONNECTION;

    // check the connection is okey? 
    if ($conn == false) {
      throw new \PDOException(parent::MSG_CONNECT_PDO_EXCEPTION . __METHOD__ . '. ');
    }

    $conn->beginTransaction();
    try{
      // Prepare the SQL query for the recipes table
      $sql = "INSERT INTO recipes (name, description, isActive, image_url, preparation_time_min, 
                cooking_time_min, directions, meal_type_1, meal_type_2, meal_type_3) 
              values (:name, :description, 1, :image_url, :preparation_time_min, 
                :cooking_time_min, :directions, :meal_type_1, :meal_type_2, :meal_type_3);";
      
      $params = [
        'name' => $data['name'],
        'description' => $data['description'],
        'image_url' => $data['image_url'] ?? "",
        'preparation_time_min' => $data['preparation_time_min'],
        'cooking_time_min' => $data['cooking_time_min'],
        'directions' => $data['directions'],
        'meal_type_1' => $data['meal_type_1'],
        'meal_type_2' => $data['meal_type_2'],
        'meal_type_3' => $data['meal_type_3']
      ];
      self::query($sql, $conn, \PDO::FETCH_ASSOC, $params);


      // Prepare the SQL query for the ingredient_recipe table
      $recipeId = $conn->lastInsertId();

      $sql2 = "INSERT INTO ingredient_recipe (recipe_id, ingredient_id, number_of_unit, measurement_description) VALUES ";
      $values = [];
      foreach ($data['ingredientComponents'] as $component) {
        $values[] = "($recipeId, {$component['ingredient_id']}, {$component['quantity']}, '{$component['unit']}')";
      }


    $sql2 .= implode(',', $values);
    // execute the query to insert the ingredient_recipe data
    $conn->exec($sql2);
    $conn->commit();
  
    } catch (\PDOException $PDOException) {
      $conn->rollBack();
      throw $PDOException;
    }
  } 

  
  /**
   * Executes the recipe creation operation.
   *
   * @param array $data The data required for creating the recipe.
   * @return bool Returns true if the recipe is created successfully, false otherwise.
   */
  static public function execute(array $data) : bool {
    try {
      self::validateData($data);
    } catch (\InvalidArgumentException $InvalidArgumentException) {
      handleException($InvalidArgumentException);
      self::notify("Add recipe failed caused by: " . $InvalidArgumentException->getMessage());
      return false;
    }
    try {
      self::saveToDatabase($data);
    } catch (\PDOException $PDOException) {
      handlePDOException($PDOException);
      self::notify("Add recipe failed caused by: " . $PDOException->getMessage());
    } catch (\Throwable $throwable) {
      handleError($throwable->getCode(), $throwable->getMessage(), $throwable->getFile(), $throwable->getLine());
      self::notify("Add recipe failed caused by: " . $throwable->getMessage());
    }
    self::notify("Add recipe successfully! ");
    return true;
  }
}
