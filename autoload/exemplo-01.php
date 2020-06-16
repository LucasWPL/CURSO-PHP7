<?php

    function incluirClasses($classe){
        if (file_exists($classe.".php") === true){
            require_once $classe.".php";
        }
        
    }

    //forma 01 de usar o autoload
    spl_autoload_register("incluirClasses");
    
    //forma 02 de usar o autoload
    spl_autoload_register(function ($classe){
        if (file_exists("classes". DIRECTORY_SEPARATOR .$classe.".php") === true){
            require_once "classes". DIRECTORY_SEPARATOR .$classe.".php";
        }
    });


    $eu = new Pessoa("Pedro Lucas",17);
    $eu->falar("oi kk");
?>