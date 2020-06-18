<?php

    class Usuario {

        //MESMAS VARIÁVEIS QUE TEM NO BDD
        private $idusuario;
        private $dessenha;
        private $deslogin;
        private $dtcadstro;

        //MÉTODO CONSTRUTOR
        public function __construct($login = "",$senha = ""){
            $this->setSenha($senha);
            $this->setLogin($login);
        }

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
                $this->setData($res[0]);
            }
        }

        //FUNÇÃO PARA LISTAR USUÁRIOS
        public static function getList(){
            $sql = new Sql();

            return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
        }

        //FUNÇÃO PARA PESQUISA POR NOME
        public function search($value){
            $sql = new Sql();

            return $sql -> select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :LOGIN",array(
                ":LOGIN"=>"%".$value."%"
            ));
        }

        //FUNÇÃO DE VALIDAÇÃO DE LOGIN
        function login($login, $senha){
            $sql = new Sql();

            $res = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :SENHA", array(
                ":LOGIN"=>$login,
                ":SENHA"=>$senha
            ));

            if (count($res)>0) {
                $this->setData($res[0]);
            }else {
                throw new Exception ("Login e/ou senha inválidos.");
            }
        }

        //FUNÇÃO PARA SETAR OS DADOS
        public function setData($data){

            $this-> setIdusuario($data['idusuario']);
            $this-> setSenha($data['dessenha']);
            $this-> setLogin($data['deslogin']);
            $this-> setDtcadastro(new DateTime($data['dtcadastro']));

        }

        //FUNÇÃO PARA INSERIR OS DADOS NO BDD POR MEIO DE UMA PROCEDURE
        public function insert(){
            $sql = new Sql();

            $res = $sql-> select("CALL sp_usuarios_insert(:LOGIN, :SENHA)", array(
                ":LOGIN"=>$this-> getLogin(),
                ":SENHA"=>$this-> getSenha()
            ));

            if (count($res) > 0) {
                $this->setData($res[0]);
            }else {
                echo "deu erro mano";
            }
        }

        //FUNÇÃO PARA FAZER A ALTERAÇÃO DE DADOS CADASTRAIS
        public function update($login, $senha){
            $this-> setLogin($login);
            $this-> setSenha($senha);

            $sql = new Sql();

            $sql -> query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :SENHA WHERE idusuario = :ID", array(
                ":LOGIN"=>$this-> getLogin(),
                ":SENHA"=>$this->getSenha(),
                ":ID"=>$this->getIdusuario()
            ));
        }

        public static function delete($id){
            $sql = new Sql();

            $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID",array(
                ":ID"=>$id
            ));

        }

        //FUNÇÃO PARA TRNSFORMAR O RETORNO DO OBJETO EM UMA STRING
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