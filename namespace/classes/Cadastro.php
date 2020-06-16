<?php

class Cadastro {
    private $nome;
    private $senha;
    private $email;

    public function getNome(){
        return $this->nome;
    }
    
    public function getSenha(){
        return $this->senha;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setNome($value){
        $this->nome = $value;
    }
    
    public function setSenha($value){
        $this->senha = $value;
    }
    
    public function setEmail($value){
        $this->email = $value;
    }

    public function __toString(){
        return json_encode (array(
            "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha()
        ));
    }
}


?>