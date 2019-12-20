<?php

/** 
 * Permet de sécuriser une chaine de caractères
 * @param $string
 * @return @string
 */
function str_secur($string) {
    return trim(htmlspecialchars($string));
}

/**
 * Debug plus lisible des différentes variables
 * @param $var
 */
function debug($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

/**
 * Affichage des étapes de la recette point par point
 * @param $recipe
 */
function showSteps($recipe){
    $steps = explode(";", $recipe);
    echo '<ul>';
        for($i=0;$i<count($steps);$i++){
            echo '<li>'.$steps[$i].'</li>';
        };
    echo '</ul>';
}

/**
 * Indique si le plat est végétarien ou non en fonction de la valeur du booléen
 * @param int $var
 */
function isVegetarian(int $var){
    if($var == 1){
        echo 'Oui';
    } else if($var == 0){
        echo 'Non';
    } else {
        echo 'Non communiqué';
    }
}

/**
 * Formate l'affichage du temps en HH:mm en fonction des minutes données
 * @param  int $temps
 */
function formatage(int $temps){
    if($temps < 60) {
        echo $temps.'min';
    } else if (($temps >= 60) && ($temps < 120)) {
        $t1 = $temps - 60;
        echo '1h'.$t1.'min';
    } else if (($temps >= 120) && ($temps < 180)){
        $t2 = $temps - 120;
        echo '2h'.$t2.'min';
    }
}