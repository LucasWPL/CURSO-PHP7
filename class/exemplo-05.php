<?php

    interface Humano{
        public function falar($fala);
    }

    class Pessoa implements Humano{
        public $nome = "Pedro Lucas";
        protected $idade = 17;
        private $senha = "123321";


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

    class Programador extends Pessoa {
        
        /* 
        public function exibirDados(){
            echo get_class($this)."<br>";
            echo $this-> nome . "<br>";
            echo $this-> idade . "<br>";
            echo $this-> senha . "<br>";
        }
        */
    }
    

    $obj = new Programador;
    $obj-> falar("oi galerinha");
    

?>