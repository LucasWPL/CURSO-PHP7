<?php

    interface Humano{
        public function falar($fala);
    }

    class Pessoa implements Humano{
        private $nome;
        private $idade;

        public function __construct($v1,$v2){
            $this-> nome = $v1;
            $this-> idade = $v2;
        }

        public function setNome($nome){
            $this-> nome = $nome;
        }

        
        public function getNome(){
            return $this-> nome;
        }

        public function setIdade($value){
            $this-> idade = $value;
        }

        public function getIdade(){
            return $this-> idade;
        }

        public function exibirDados(){
            echo $this-> nome . "<br>";
            echo $this-> idade . "<br>";
            echo $this-> senha . "<br>";
        }

        public function falar($fala)
        {
            echo $this->nome." falou ".$fala;
        }
        
    }


?>