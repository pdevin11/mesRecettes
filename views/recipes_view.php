<!DOCTYPE HTML>
<html>
<head>
    <title>Liste des recettes - Mes Recettes</title>
    <?php include_once 'includes/head.php'; ?>
</head>

<body>
    <?php include_once 'includes/header.php'; ?>

    <?php foreach ($allRecipes as $index => $recipe): ?>
    
    <div class='container'>
        <div class='row'>
            <div class='row'>
                <div class='col-sm-12'>
                    <h1><a href="index.php?page=recipe&id=<?= $recipe['id'] ?>"><?= $recipe['name'] ?></a></h1>
                </div>
            </div> <!-- /.row -->

            <div class='row'>
                <div class='col-sm-1'></div>
                <div class='col-sm-7 frame image'><img src="assets/images/<?= $recipe['image'] ?>" alt="<?= $recipe['image'] ?>" /></div>
                <div class='col-sm-3 frame info'>
                    <span class="icon"><img src="assets/icons/clock.png" alt="clock logo"></span> Temps de préparation: <?php formatage($recipe['preparation']); ?><br/>
                    <span class="icon"><img src="assets/icons/baking.png" alt="baking logo"></span> Temps de cuisson: <?php formatage($recipe['baking']); ?><br />
                    <span class="icon"><img src="assets/icons/thermostat.png" alt="thermostat logo"></span> Thermostat: <?= $recipe['thermostat'] ?><br/>
                    <span class="icon"><img src="assets/icons/leaf.png" alt="leaf logo"></span> Végétarien: <?php isVegetarian($recipe['vegetarian']); ?>
                </div>
                <div class='col-sm-1'></div>
            </div> <!-- /.row -->

            <div class='row'>
                <div class='col-sm-1'></div>
                <div class='col-sm-7 frame recipe'><?php showSteps($recipe['steps']); ?></div>
                <div class='col-sm-3 frame ingredients'><?php showSteps($recipe['ingredients']); ?></div>
                <div class='col-sm-1'></div>
            </div> <!-- /.row -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->

    <?php endforeach; ?>
</body>
</html>