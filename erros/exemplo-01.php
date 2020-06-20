<?php

    try {
        throw new Exception("Erro 404 chefia. :/", 404);
        
    } catch (Exception $e) {
        echo json_encode(array(
            "message"=>$e->getMessage(),
            "line"=>$e->getLine(),
            "file"=>$e->getFile(),
            "code"=>$e->getCode()
        ));
    }

?>