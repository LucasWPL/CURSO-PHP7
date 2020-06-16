<?php

    function test($callback){
        //UM PROCESSO LENTO

        $callback();


    }

    test(function(){

        echo "Terminou!";
        
    })

?>