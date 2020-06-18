<?php

    class Sql extends PDO {

        private $conn;

        //METODO CONSTRUTOR
        public function __construct(){
            $this->conn = new PDO("mysql:dbname=curso-php7;host=localhost","root","");
        }

        //SETAR PARAMETROS 
        public function setParams($statement, $parameters = array()){
            foreach ($parameters as $key => $value) {
                $this->setParam($statement, $key, $value);
            }
        }

        //SETAR UM SÓ PARAMETRO
        private function setParam($statement, $key, $value){
            $statement -> bindParam($key, $value);
        }
        
        //FAZER O PREPARO DO COMANDO 
        public function query($rawQuery, $params = array()){
            $stmt = $this-> conn-> prepare($rawQuery);
            $this->setParams($stmt,$params);
            $stmt-> execute();
            return $stmt;
        }

        //FAZER UM SELECT       
        public function select($rawQuery, $params = array()):array{
            $stmt = $this->query($rawQuery, $params);
            return $stmt -> fetchAll(PDO:: FETCH_ASSOC);
        }
    }
?>