<?php

    function error_handler($code,$message,$file,$line){
        echo json_encode(array(
            "code"=>$code,
            "message"=>$message,
            "file"=>$file,
            "line"=>$line
        ));
    }

    //manipulando como o erro vai ser exibido
    set_error_handler("error_handler");
    
    
    //vai retornar um erro
    $total = 100/0;

?>