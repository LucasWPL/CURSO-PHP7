<?php

    $name = "images";

    if (!is_dir($name)) {
        mkdir($name);
        echo "O diretório ".$name." foi criado com sucesso.";    
    }else{
        rmdir($name);
        echo "O diretório ".$name." já existia. Agora foi excluído com sucesso.";
    }

?>