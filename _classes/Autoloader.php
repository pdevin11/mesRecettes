<?php

class Autoloader{

    /**
     * Ajout de l'autoloader
     */
    static function registrer(){
        spl_autoload_register(function($class){
            include_once '_classes/'.$class.'.php';
        });
    }
}