<? require($_SERVER['DOCUMENT_ROOT'] . "/Public/inc/header.php") ?>

<? 
function getCategory($category) {
    return [
        'EMMP' => 'Eggs, milk and milk products',
        'FAO' => 'Fats and oils',
        'FRU' => 'Fruits',
        'GNBK' => 'Grain, nuts and baking products',
        'HRBS' => 'Herbs and spices',
        'MSF' => 'Meat, sausages and fish',
        'PRP' => 'Pasta, rice and pulses',
        'VEGI' => 'Vegetables',
        'OTHR' => 'Others'
    ][$category];
} 

function getMeasurementDescription($measurementDescription) {
    return [
        'tsp' => 'teaspoon',
        'cup' => 'cup',
        'tbsp' => 'table spoon',
        'g' => 'gram',
        'lb' => 'lb',
        'can' => 'can',
        'oz' => 'oz',
        'unit' => 'unit'
    ][$measurementDescription];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Manager Update Ingredient</title>
</head>

<body>
    <div class="container py-5">
        <div class="py-3 text-center">
            <h1 class="display-1">Manager Update Ingredient</h1>
        </div>
        <div class="row g-5">
            <form action="/manager/ingredient/update" method="POST" enctype="multipart/form-data" style="width: 50vw; margin: 0 auto; padding: 20px; border: 1px solid #e1ebfa; border-radius: 10px; box-shadow: 0 0 10px 0 #e1ebfa; margin-top: 50px; margin-bottom: 50px;">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $ingredient->getId() ?>">
                <div class="mb-3">
                    <label for="meal_type_3" class="col-sm-2 col-form-label">Category (Last: <?= getCategory($ingredient->getCategory())?>)</label>
                    <div class="col-sm-15">
                        <select class="form-select" id="category" name="category">
                            <?php foreach (['EMMP', 'FAO', 'FRU', 'GNBK', 'HRBS', 'MSF', 'PRP', 'VEGI', 'OTHR'] as $category) : ?>
                                <option value="<?= $category ?>" <?= ($ingredient->getCategory() == $category) ? 'selected' : '' ?>><?= getCategory($category) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="measurement_description" class="col-sm-5 col-form-label">Measurement Description (Last: <?= getMeasurementDescription($ingredient->getMeasurementDescription()) ?>)</label>
                    <div class="col-sm-15">
                        <select class="form-select" id="measurement_description" name="measurement_description">
                            <?php foreach (['tsp', 'cup', 'tbsp', 'g', 'lb', 'can', 'oz', 'unit'] as $measurementDescription) : ?>
                                <option value="<?= $measurementDescription ?>" <?= ($ingredient->getMeasurementDescription() == $measurementDescription) ? 'selected' : '' ?>><?= getMeasurementDescription($measurementDescription) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="preparation_time_min" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-15">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $ingredient->getName() ?>">
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-success" name="update" type="submit">Update</button>
                </div>
            </form>
            <div class="d-md-flex justify-content-md-end py-3">
                <a href="/manager/ingredient" class="btn btn-secondary me-md-2" tabindex="-1" role="button">Back</a>
            </div>
        </div>
    </div>

    <footer class="site-footer">
        <? require($_SERVER['DOCUMENT_ROOT'] . "/Public/inc/footer.php") ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>