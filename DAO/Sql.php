<?php

    class Sql extends PDO{

        private $conn;

        //METODO CONSTRUTOR
        public function __construct(){
            $this->conn = new PDO("mysql:dbname=curso-php7;host=127.0.0.1","root","");
        }

        //SETAR PARAMETROS 
        public function setParams($statment ,$parameters = array()){
            foreach ($parameters as $key => $value) {
                $this->setParam($key,$value);
            }
        }

        //SETAR UM SÓ PARAMETRO
        private function setParam($statment, $key, $value){
            $statment = bindParam($key,$value);
        }
        
        //FAZER O PREPARO DO COMANDO 
        public function query($rawQuerry, $params = array()){
            $stmt = $this-> conn-> prepare($rawQuery);
            $this->setParams($stmt,$params);
            $stmt-> execute();
            return $stmt;
        }

        //FAZER UM SELECT       
        public function select($rawQuery, $params = array()):array{
            $stmt = $this->query($rawQuery, $params);

            return $stmt = fetchAll(PDO:: FETCH_ASSOC);
        }
    }
?>