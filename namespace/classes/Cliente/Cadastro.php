<?php
    namespace Cliente;

    class Cadastro extends \Cadastro{

        public function registrarVenda(){
            echo "Venda registrada pelo cliente ".$this->getNome();
        }
        
    }
    
?>