<?php

    $dir = "images";
    if(!is_dir($dir)) mkdir($dir);

    foreach (scandir($dir) as $item) {
        if(!in_array($item,array(".",".."))){
            unlink($dir.DIRECTORY_SEPARATOR.$item);
        }
    }

    echo "Execução realizada com sucesso.";

?>