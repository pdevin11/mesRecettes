<?php 

include_once '_classes/Recipes.php';

if(!empty($_POST) && isset($_POST['btnAdd'])){

    $success = true;

    $image = 'coming_soon.png';
    $baking = 0;
    $thermostat = 0;
    $isVegetarian = 2; // "Non communiqué"

    if(!isset($_POST['name'])){
        $success = false;
        $nameError = "Vous devez indiquer un nom pour ajouter une recette.";
    }
    
    if(empty($_POST['steps'])){
        $success = false;
        $stepsError = "Vous devez indiquer les étapes nécessaires à la préparation.";
    }

    if(empty($_POST['ingredients'])){
        $success = false;
        $ingredientsError = "Vous devez indiquer les ingrédients nécessaires à la préparation.";
    }

    if(empty($_POST['preparation'])){
        $success = false;
        $prepaError = "Vous devez indiquer un temps de préparation approximatif.";
    }

    if($success){
        /* Définition des variables */
        $name = $_POST['name'];

        if(isset($_POST['image'])){$image = $_POST['image'];}

        $steps = $_POST['steps'];
        $ingredients = $_POST['ingredients'];
        $preparation = $_POST['preparation'];

        if(isset($_POST['baking'])){$baking = $_POST['baking'];}

        if(isset($_POST['thermostat'])){$thermostat = $_POST['thermostat'];}

        if(isset($_POST['isVegetarian'])){$isVegetarian = $_POST['isVegetarian'];}

        try
        {
            Recipes::addNewRecipe($name, $image, $steps, $ingredients, $preparation, $baking, $thermostat, $isVegetarian);
            $msg = 'Votre recette a été ajoutée !';
        } 
        catch (Exception $e)
        {
            throw new Exception('Insertion non effectuée');
            echo $e->getMessage();
        }
    } else {
        $msg = 'Il y a des erreurs dans la saisie.';
    }
}