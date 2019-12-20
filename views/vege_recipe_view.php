<!DOCTYPE HTML>
<html>
<head>
    <title>Recettes Végétariennes - Mes recettes</title>
    <?php include_once 'includes/head.php'; ?>
</head>

<body>
    <?php include_once 'includes/header.php'; ?>

    <?php foreach($allVegetarianRecipes as $index => $vegeRecipe ): ?>

    <div class='container'>
        <div class='row'>
            <div class='row'>
                <div class='col-sm-12'>
                <h1><a href="index.php?page=recipe&id=<?= $vegeRecipe['id'] ?>"><?= $vegeRecipe['name'] ?></a></h1>
                </div>
            </div> <!-- /.row -->

            <div class='row'>
                <div class='col-sm-1'></div>
                <div class='col-sm-7 frame image'><img src="assets/images/<?= $vegeRecipe['image'] ?>" alt="<?= $vegeRecipe['image'] ?>" /></div>
                <div class='col-sm-3 frame info'>
                    <span class="icon"><img src="assets/icons/clock.png" alt="clock logo"></span> Temps de préparation: <?php formatage($vegeRecipe['preparation']); ?><br/>
                    <span class="icon"><img src="assets/icons/baking.png" alt="baking logo"></span> Temps de cuisson: <?php formatage($vegeRecipe['baking']); ?><br />
                    <span class="icon"><img src="assets/icons/thermostat.png" alt="thermostat logo"></span> Thermostat: <?= $vegeRecipe['thermostat'] ?><br/>
                    <span class="icon"><img src="assets/icons/leaf.png" alt="leaf logo"></span> Végétarien: <?php isVegetarian($vegeRecipe['vegetarian']); ?>
                </div>
                <div class='col-sm-1'></div>
            </div> <!-- /.row -->

            <div class='row'>
                <div class='col-sm-1'></div>
                <div class='col-sm-7 frame recipe'><?php showSteps($vegeRecipe['steps']); ?></div>
                <div class='col-sm-3 frame ingredients'><?php showSteps($vegeRecipe['ingredients']); ?></div>
                <div class='col-sm-1'></div>
            </div> <!-- /.row -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->

    <?php endforeach ?>
</body>
</html>