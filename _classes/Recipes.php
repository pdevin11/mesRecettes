<?php

class Recipes {

    public $id;
    public $name;
    public $image;
    public $steps;
    public $ingredients;
    public $preparation;
    public $baking;
    public $thermostat;
    public $vegetarian;

    /**
     * Recipes construct
     * @param $id
     */
    function __construct($id) {
        
        global $db;

        $id = str_secur($id);

        $reqRecipe = $db->prepare('SELECT * FROM recettes WHERE id = ?');
        $reqRecipe->execute([$id]);
        $data = $reqRecipe->fetch();

        $this->id = $id;
        $this->name = $data['name'];
        $this->image = $data['image'];
        $this->steps = $data['steps'];
        $this->ingredients = $data['ingredients'];
        $this->preparation = $data['preparation'];
        $this->baking = $data['baking'];
        $this->thermostat = $data['thermostat'];
        $this->vegetarian = $data['vegetarian'];
    }

    /**
     * Retourne toutes les recettes classées par id du plus récent au plus ancien
     * @return array
     */
    static function getAllRecipes(){
         
        global $db;

        $reqRecipes = $db->query('SELECT * FROM recettes ORDER BY id DESC');
        $reqRecipes->execute([]);
        return $reqRecipes->fetchAll();
    }

    /**
     * Retourne toutes les recettes végératiennes par id du plus récent au plus ancien
     * @return array
     */
    static function getVegetarianRecipes(){

        global $db;

        $reqVegetarian = $db->query('SELECT * FROM recettes WHERE vegetarian = "1" ORDER BY id DESC');
        $reqVegetarian->execute([]);
        return $reqVegetarian->fetchAll();
    }

    /**
     * Insert une nouvelle recette dans la Base de données
     * @param $name, $image, $steps, $ingredients, $preparation, $baking, $thermostat, $vegetarian
     */
    static function addNewRecipe($name, $image, $steps, $ingredients, $preparation, $baking, $thermostat, $vegetarian){
        
        global $db;

        $reqNewRecipe = $db->prepare('INSERT INTO recettes (name, image, steps, ingredients, preparation, baking, thermostat, vegetarian) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
        $reqNewRecipe->execute(array($name, $image, $steps, $ingredients, $preparation, $baking, $thermostat, $vegetarian));
    }
}