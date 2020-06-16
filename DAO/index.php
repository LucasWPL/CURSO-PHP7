<?php
   
    require_once("config.php");
    
    $usu = new Usuario();
    $usu -> loadById(2);

    echo $usu;

?>