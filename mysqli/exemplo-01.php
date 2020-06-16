<?php

$conn = new mysqli("127.0.0.1","root","","curso-php7");

if ($conn->connect_error) {
    echo "Erro: ".$conn->connect_error;
}

$stmt = $conn-> prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");
$stmt -> bind_param("ss", $login, $pass);

$login = "admin";
$pass = "admin";

$stmt-> execute();

?>