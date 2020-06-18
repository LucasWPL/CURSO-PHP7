<?php

    require_once("config.php");

    $file = fopen("log.txt","a+");
    fwrite($file,date("d-m-Y H:i:s")."\r\n");

    fclose($file);
    echo "Arquivo criado e alterado com sucesso!";
?>