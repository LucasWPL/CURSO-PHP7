<?php

    class Endereco{
        private $logradouro;
        private $numero;
        private $cidade;
        private $UF;

        public function __construct($v1, $v2, $v3, $v4){
            $this-> logradouro = $v1;
            $this-> numero = $v2;
            $this-> cidade = $v3;
            $this-> UF = $v4;
        }

        public function __destruct(){
        
        }

        public function __toString(){
            return $this-> logradouro.", ".$this-> numero.", ".$this-> cidade." - ".$this-> UF;
        }
    }

    $minhaCasa = new Endereco("Rua Orial Dantas de Farias","45","Mossoró","RN");

    echo $minhaCasa;

?>