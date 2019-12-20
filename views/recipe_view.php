<!DOCTYPE HTML>
<html>
<head>
    <title>Ma recettes</title>
    <?php include_once 'includes/head.php'; ?>
</head>

<body>
    <?php include_once 'includes/header.php'; ?>

    <?php
    
    $req = $db->query('SELECT * FROM recettes ORDER BY id DESC LIMIT 1');
    while($item = $req->fetch()) {
    ?>

    <div class='container'>
        <div class='row'>
            <div class='row'>
                <div class='col-sm-12'>
                    <h1><?= $item['name'] ?></h1>
                </div>
            </div> <!-- /.row -->

            <div class='row'>
                <div class='col-sm-1'></div>
                <div class='col-sm-7 frame image'><img src="assets/images/<?= $item['image'] ?>" alt="<?= $item['image'] ?>" /></div>
                <div class='col-sm-3 frame info'>
                    <span class="icon"><img src="assets/icons/clock.png" alt="clock logo"></span> Temps de préparation: <?php formatage($item['preparation']); ?><br/>
                    <span class="icon"><img src="assets/icons/baking.png" alt="baking logo"></span> Temps de cuisson: <?php formatage($item['baking']); ?><br />
                    <span class="icon"><img src="assets/icons/thermostat.png" alt="thermostat logo"></span> Thermostat: <?= $item['thermostat'] ?><br/>
                    <span class="icon"><img src="assets/icons/leaf.png" alt="leaf logo"></span> Végétarien: <?php isVegetarian($item['vegetarian']); ?>
                </div>
                <div class='col-sm-1'></div>
            </div> <!-- /.row -->

            <div class='row'>
                <div class='col-sm-1'></div>
                <div class='col-sm-7 frame recipe'><?php showSteps($item['steps']); ?></div>
                <div class='col-sm-3 frame ingredients'><?php showSteps($item['ingredients']); ?></div>
                <div class='col-sm-1'></div>
            </div> <!-- /.row -->
        </div> <!-- /.row -->
        <a href="index.php?page=recipes"><button type="submit" class="btn btn-primary btn-lg btn-block" name="btnBack">Revenir à la liste des recettes</button></a>
    </div> <!-- /.container -->
    <?php }; ?>
</body>
</html>