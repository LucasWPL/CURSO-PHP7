<?php

spl_autoload_register(function($nome){
    $dirClass = "classes";
    $filename = $dirClass. DIRECTORY_SEPARATOR . $nome . ".php";
    if (file_exists($filename)) {
        require_once($filename); 
    }
});

?>