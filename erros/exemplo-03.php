<?php

    //impedir que as notices sejam exibidas
    error_reporting(E_ALL & ~E_NOTICE);

    $nome = $_GET["name"];

    echo $nome;

?>