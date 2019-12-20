<!DOCTYPE HTML>
<html>
<head>
    <title>Ajouter une recette - Mes recettes</title>
    <?php include_once 'includes/head.php'; ?>
</head>

<body>
    <?php include_once 'includes/header.php'; ?>

    <div class='container'>
        
        <h2>Ajouter une recette</h2>

        <span class="result"><?php if(isset($msg))echo $msg; ?></span>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Nom de la recette</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom de la recette" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>">
                <span class="error"><?php if(isset($nameError)) echo $nameError; ?></span>
            </div> <!-- ./form-group name -->

            <div class="form-group">
                <input type="hidden" name="MAX_FILE_SIZE" value="20480000" /> <!-- limite à 2Mo la taille d'un upload -->
                <label for="imageFile">Image associée à la recette :</label><br>
                <input type="file" name="imageFile" id="imageFile">
                <span class="error"><?php if(isset($uploadError)) echo $uploadError; ?></span>
            </div> <!-- ./form-group imageFile -->

            <div class="form-group">
                <label for="steps">Etapes de la recette</label>
                <textarea class="form-control" id="steps" name="steps" aria-describedby='stepsHelp'></textarea>
                <small id="stepsHelp" class="form-text text-muted">Ajouter un ";" à la fin de chaque étape sauf pour la dernière.</small>
                <span class="error"><?php if(isset($stepsError)) echo $stepsError; ?></span>
            </div> <!-- ./form-group steps -->

            <div class="form-group">
                <label for="ingredients">Ingrédients nécessaires</label>
                <textarea class="form-control" id="ingredients" name="ingredients" aria-describedby='ingredientsHelp'></textarea>
                <small id="ingredientsHelp" class="form-text text-muted">Ajouter un ";" à la fin de chaque étape sauf pour la dernière.</small>
                <span class="error"><?php if(isset($ingredientsError)) echo $ingredientsError; ?></span>
            </div> <!-- ./form-group ingredients -->

            <div class="form-group">
                <label for="preparation">Temps de préparation</label>
                <input type="number" class="form-control" id="preparation" name="preparation" step="5" aria-describedBy="prepaHelp">
                <small id="prepaHelp" class="form-text text-muted">Indiquer le temps de préparation en minutes.</small>
                <span class="error"><?php if(isset($prepaError)) echo $prepaError; ?></span>
            </div> <!-- ./form-group preparation -->

            <div class="form-group">
                <label for="baking">Temps de cuisson</label>
                <input type="number" class="form-control" id="baking" name="baking" aria-describedBy="bakingHelp">
                <small id="bakingHelp" class="form-text text-muted">Indiquer le temps de cuisson en minutes.</small>
            </div> <!-- ./form-group baking -->
            
            <div class="form-group">
                <label for="thermostat">Thermostat</label>
                <input type="number" class="form-control" id="thermostat" name="thermostat" max="10" aria-describedBy="thermoHelp">
                <small id="thermoHelp" class="form-text text-muted">Indiquer le thermostat.</small>
            </div> <!-- ./form-group thermostat -->

            <p>Est-ce un plat végétarien?</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="1" name="isVegetarian" class="custom-control-input">
                <label class="custom-control-label" for="1">Oui</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="0" name="isVegetarian" class="custom-control-input">
                <label class="custom-control-label" for="0">Non</label>
            </div>
            <br>
            <span class="error"><?php if(isset($isVegetarianError)) echo $isVegetarianError; ?></span>
            <br>
            <button type="submit" class="btn btn-success btn-lg btn-block" name="btnAdd">Ajouter la recette</button>
        </form>

    </div> <!-- /.container -->
</body>
</html>
