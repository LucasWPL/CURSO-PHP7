<?php

    class Carro {
        private $modelo;
        private $ano;
        private $motor;

        public function setModelo($value){
            $this-> modelo = $value;
        }
        
        public function setMotor($value){
            $this-> motor = $value;
        }

        public function setAno($value){
            $this-> ano = $value;
        }

        public function getModelo(){
            return $this-> modelo;
        }
        
        public function getAno():int{
            return $this-> ano;
        }
        
        public function getMotor():float{
            return $this-> motor;
        }

        public function exibir(){
            return array(
                "modelo"=>$this->getModelo(),
                "motor"=>$this->getMotor(),
                "ano"=>$this->getAno()
            );
        }
    }

    $fusion = new Carro;
    $fusion-> setModelo("Fusion Titanium");
    $fusion-> setMotor("2.0");
    $fusion-> setAno("2019");

    var_dump ($fusion-> exibir());
    
?>