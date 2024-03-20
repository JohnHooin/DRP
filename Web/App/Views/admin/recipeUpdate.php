<? require($_SERVER['DOCUMENT_ROOT'] . "/Public/inc/header.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Manager Update Recipe</title>
</head>

<body>
    <div class="container py-5">
        <div class="py-3 text-center">
            <h1 class="display-1">Manager Update Recipe</h1>
        </div>
        <div class="row g-5">
            <form action="/manager/recipe/update" method="POST" enctype="multipart/form-data" style="width: 50vw; margin: 0 auto; padding: 20px; border: 1px solid #e1ebfa; border-radius: 10px; box-shadow: 0 0 10px 0 #e1ebfa; margin-top: 50px; margin-bottom: 50px;">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $recipe->getId() ?>">
                <div class="mb-3">
                    <label for="name" class="col-sm-5 col-form-label">Name</label>
                    <div class="col-sm-15">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $recipe->getName() ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="col-sm-5 col-form-label">Description</label>
                    <div class="col-sm-15">
                        <textarea class="form-control" id="description" name="description"> <?= $recipe->getDescription() ?></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="preparation_time_min" class="col-sm-5 col-form-label">Preparation Time Min</label>
                    <div class="col-sm-15">
                        <input type="number" class="form-control" id="preparation_time_min" name="preparation_time_min" value="<?= $recipe->getPreparationTime() ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="cooking_time_min" class="col-sm-5 col-form-label">Cooking Time Min</label>
                    <div class="col-sm-15">
                        <input type="number" class="form-control" id="cooking_time_min" name="cooking_time_min" value="<?= $recipe->getCookingTime() ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="directions" class="col-sm-5 col-form-label">Directions</label>
                    <div class="col-sm-15">
                        <textarea class="form-control" id="directions" name="directions"><?= $recipe->getDirection() ?></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="meal_type_1" class="col-sm-5 col-form-label">Meal Type 1 (Last: <?= $recipe->getMealType1() ?>)</label>
                    <div class="col-sm-15">
                        <select class="form-select" id="meal_type_1" name="meal_type_1">
                            <option value="" selected disabled hidden>Select meal recipe for</option>
                            <option value="Breakfast">Breakfast</option>
                            <option value="Lunch">Lunch</option>
                            <option value="Dinner">Dinner</option>
                            <?php
                            $categories1 = ['Breakfast', 'Lunch', 'Dinner'];
                            foreach ($categories1 as $category) {
                                $selected = ($recipe->getMealType1() == $category) ? 'selected' : '';
                                echo "<option value=\"$category\" $selected>$category</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="meal_type_2" class="col-sm-5 col-form-label">Meal Type 2 (Last: <?= $recipe->getMealType2() ?>)</label>
                    <div class="col-sm-15">
                        <select class="form-select" id="meal_type_2" name="meal_type_2" aria-label="Select meal type">
                            <?php
                            $categories2 = ['Appetizer', 'Main Dish', 'Side Dish', 'Dessert'];
                            foreach ($categories2 as $category) {
                                $selected = ($recipe->getMealType2() == $category) ? 'selected' : '';
                                echo "<option value=\"$category\" $selected>$category</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="meal_type_3" class="col-sm-5 col-form-label">Meal Type 3 (Last: <?= $recipe->getMealType3() ?>)</label>
                    <div class="col-sm-15">
                        <select class="form-select" id="meal_type_3" name="meal_type_3" aria-label="Select meal type">
                            <?php
                            $categories3 = ['Baked', 'Beverage', 'Salad and Salad Dressing', 'Soup', 'Sauce and Condiment', 'Snack', 'Other'];
                            foreach ($categories3 as $category) {
                                $selected = ($recipe->getMealType3() == $category) ? 'selected' : '';
                                echo "<option value=\"$category\" $selected>$category</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="image">Upload your image</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-success" name="update" type="submit">Update</button>
                </div>
                <div class="d-md-flex justify-content-md-end py-3">
                    <a href="/manager/recipe" class="btn btn-secondary me-md-2" tabindex="-1" role="button">Back</a>
                </div>
            </form>
        </div>
    </div>

    <footer class="site-footer">
        <? require($_SERVER['DOCUMENT_ROOT'] . "/Public/inc/footer.php") ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>