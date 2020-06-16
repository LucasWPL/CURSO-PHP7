<?php
    require_once ("config.php");

    use Cliente\Cadastro;

    $eu = new Cadastro();
    $eu->setNome("Pedro Lucas");
    $eu->setEmail("pedro.lucaswpl@gmail.com");
    $eu->setSenha("123321");

    $eu->registrarVenda();

?>