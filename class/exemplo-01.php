<?php

    class Pessoa{
        public $nome;

        function falar(){
            return "Olá visitante, meu nome é ".$this->nome;
        }
    }

    $lucas = new Pessoa;
    $lucas-> nome = "Pedro Lucas";
    echo $lucas-> falar();

?>