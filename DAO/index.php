<?php
   
    require_once("config.php");
    //CARREGAR UM USUÁRIO POR MEIO DO ID
    //$usu = new Usuario();
    //$usu -> loadById(2);
    //echo $usu;

    //FUNÇÃO PARA LISTAR TODOS OS VALORES DA TABELA
    //$lista = Usuario::getList();
    //echo json_encode($lista);

    //FUNÇÃO DE PESQUISA
    //$pesq = Usuario::search("adm");
    //echo json_encode($pesq);

    //FUNÇÃO DE VALIDAÇÃO DE LOGIN E SENHA
    //$usuario = new Usuario();
    //$usuario -> login("Pedro Lucas","221133");
    //echo $usuario;

    //INSERINDO UM NOVO USUÁRIO
    //$usuario = new Usuario("Jennifer","tinder");
    //$usuario->insert();
    //echo $usuario;

    //ALTERANDO USUÁRIO
    //$usuario = new Usuario();
    //$usuario -> loadById(5);
    //$usuario -> update("professor","!@#$%¨&*()");
    //echo $usuario;

    $deletando = Usuario::delete(7);
?>