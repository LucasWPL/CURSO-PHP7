<?php

    class Usuario {

        //MESMAS VARIÁVEIS QUE TEM NO BDD
        private $idusuario;
        private $dessenha;
        private $deslogin;
        private $dtcadstro;

        //GETS AND SETS:INICIO
        public function getSenha(){
            return $this->dessenha;
        }

        public function setSenha($value){
            $this->dessenha = $value;
        }
        
        public function getLogin(){
            return $this->deslogin;
        }

        public function setLogin($value){
            $this->deslogin = $value;
        }
        
        public function getIdusuario(){
            return $this->idusuario;
        }

        public function setIdusuario($value){
            $this->idusuario = $value;
        }
        
        public function getDtcadastro(){
            return $this->dtcadastro;
        }

        public function setDtcadastro($value){
            $this->dtcadastro = $value;
        }
        //GET AND SETS:FIM

        //FUNÇÃO PARA CARREGAR UM USUÁRIO
        public function loadById($value){
            $sql = new Sql();

            $res = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",array(
                ":ID"=>$value
            ));

            if(count($res)>0){
                $row = $res[0];

                $this-> setIdusuario($row['idusuario']);
                $this-> setSenha($row['dessenha']);
                $this-> setLogin($row['deslogin']);
                $this-> setDtcadastro(new DateTime($row['dtcadastro']));
                

                
            }
        }

        public function __toString() {
            return json_encode(array(
                "idusuario"=>$this->getIdusuario(),
                "dessenha"=>$this->getSenha(),
                "deslogin"=>$this->getLogin(),
                "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
            ));
        }

    }
?>