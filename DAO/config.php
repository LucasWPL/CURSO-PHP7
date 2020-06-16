<?php
spl_autoload_register(function($class){
    $filename=$class.".php";
    if (file_exist($filename)===true){
        require_once($filename);
    }
});

?>