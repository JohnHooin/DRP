<? require_once($_SERVER['DOCUMENT_ROOT'] . "/Public/inc/header.php"); ?>

<style>
  body {}

  .add-recipe-frm {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 10 auto;
    height: auto;
  }

  .form-select {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
  }

  input[type="number"] {
    -moz-appearance: textfield;
    -webkit-appearance: textfield;
  }
</style>

<h2 style="text-align: center; margin-top: 50px;">Add Your Creative Recipe</h2>

<form action="/recipe/add" method="post" style="width: 50vw; margin: 0 auto; padding: 20px; border: 1px solid #e1ebfa; border-radius: 10px; box-shadow: 0 0 10px 0 #e1ebfa; margin-top: 50px; margin-bottom: 50px;">
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="name" placeholder="Enter name of recipe">
    <label for="name" id="name">Recipe name</label>
  </div>

  <div class="input-group mb-2">

    <div class="form-floating">
      <input type="number" class="form-control" id="preparation_time_min" placeholder="How long to make?">
      <label for="preparation_time_min">Preparation time</label>
    </div>

    <span class="input-group-text">minutes</span>
    <div class="form-floating">
      <input type="number" class="form-control" id="cooking_time_min" placeholder="How long to make?">
      <label for="cooking_time_min">Cooking time</label>
    </div>
    <span class="input-group-text">minutes</span>
  </div>

  <div class="input-group mb-2">

    <select class="form-select" id="meal_recipe_1" aria-label="Select meal type">
      <option value="" selected disabled hidden>Select meal recipe for</option>
      <option value="Breakfast">Breakfast</option>
      <option value="Lunch">Lunch</option>
      <option value="Dinner">Dinner</option>
    </select>

    <select class="form-select" id="meal_type_2" aria-label="Select meal type">
      <option value="" selected disabled hidden>Select meal type</option>
      <option value="Appetizer">Appetizer</option>
      <option value="Main Dish">Main Dish</option>
      <option value="Side Dish">Side Dish</option>
      <option value="Dessert">Dessert</option>
    </select>

    <select class="form-select" id="meal_type_3" aria-label="Select meal type">
      <option value="" selected disabled hidden>Select meal category</option>
      <option value="Baked">Baked</option>
      <option value="Beverage">Beverage</option>
      <option value="Salad and Salad Dressing">Salad and Salad Dressing</option>
      <option value="Soup">Soup</option>
      <option value="Sauce and Condiment">Sauce and Condiment</option>
      <option value="Snack">Snack</option>
      <option value="Other">Other</option>
    </select>
  </div>

  <div class="input-group input-group-sm mb-3">
    <span class="input-group-text" id="directions">Direction</span>
    <textarea class="form-control" aria-label="With textarea"></textarea>
  </div>

  <div class="input-group input-group-sm mb-3">
    <span class="input-group-text" id="description">Description</span>
    <textarea class="form-control" aria-label="With textarea"></textarea>
  </div>

  <div class="input-group mb-3">
    <label class="input-group-text" for="image">Upload your image</label>
    <input type="file" class="form-control" id="file" name="file">
  </div>

  <button type="button" class="btn btn-outline-secondary" style="padding: 10px; margin-top: 10px; margin-bottom:15px" id="addIngredientBtn">Add Ingredient</button>

  <div id="ingredientComponents"></div>

  <button type="submit" class="btn btn-outline-primary btn-lg" style="padding: 10px; margin-top: 20px">Submit</button>
</form>



<script>
  // Data extracted from PHP
  var data = <?php echo json_encode($data); ?>;

  // Function to add select element with options and input for quantity
  function addIngredientSelect() {

    // Create container div with input-group class
    var container = document.createElement('div');
    container.classList.add('form', 'mb-3');

    var legend = document.createElement('legend');
    legend.textContent = 'Ingredient';

    var ingreCat = document.createElement('div');
    ingreCat.classList.add('input-group', 'mb-1');



    // Create select element
    var select = document.createElement('select');
    select.classList.add('form-select', 'form-select');
    select.placeholder = 'Select ingredient';

    // Add placeholder option
    var placeholderOption = document.createElement('option');
    placeholderOption.value = '';
    placeholderOption.selected = true;
    placeholderOption.disabled = true;
    placeholderOption.hidden = true;
    placeholderOption.textContent = 'Select ingredient';
    select.appendChild(placeholderOption);

    // Add options from data
    data.forEach(function(ingredient) {
      var option = document.createElement('option');
      option.value = ingredient.id;
      option.textContent = ingredient.name;
      select.appendChild(option);
    });

    // Create input element for quantity
    var quantityInput = document.createElement('input');
    quantityInput.classList.add('form-control');
    quantityInput.type = 'number';
    quantityInput.placeholder = 'Quantity';

    // Create remove button
    var removeButton = document.createElement('button');
    removeButton.classList.add('btn', 'btn-outline-secondary');
    removeButton.style.marginTop = '15px';
    removeButton.textContent = 'Remove';
    removeButton.addEventListener('click', function() {
      container.remove();
    });

    var unitOptions = [{
        value: 'tsp',
        textContent: 'Teaspoon'
      },
      {
        value: 'cup',
        textContent: 'Cup'
      },
      {
        value: 'tbsp',
        textContent: 'Tablespoon'
      },
      {
        value: 'g',
        textContent: 'Gram'
      },
      {
        value: 'lb',
        textContent: 'Pound'
      },
      {
        value: 'can',
        textContent: 'Can'
      },
      {
        value: 'oz',
        textContent: 'Ounce'
      },
      {
        value: 'unit',
        textContent: 'Unit'
      }
    ];

    var unitSelect = document.createElement('select');
    unitSelect.classList.add('form-select');
    unitSelect.placeholder = 'Select unit';
    unitOptions.forEach(function(option) {
      var unitOption = document.createElement('option');
      unitOption.value = option.value;
      unitOption.textContent = option.textContent;
      unitSelect.appendChild(unitOption);
    });

    // Append select, span, quantity input, and remove button to container
    container.appendChild(legend);
    ingreCat.appendChild(select);
    ingreCat.appendChild(unitSelect);
    container.appendChild(ingreCat);
    container.appendChild(quantityInput);
    container.appendChild(removeButton);

    // Add container to ingredient container
    document.getElementById('ingredientComponents').appendChild(container);
  }

  // Event listener for button click
  document.getElementById('addIngredientBtn').addEventListener('click', function() {
    addIngredientSelect();
  });
</script>

<? require_once($_SERVER['DOCUMENT_ROOT'] . "/Public/inc/footer.php"); ?>