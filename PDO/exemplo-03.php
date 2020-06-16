<?php

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1","root","");

$stmt = $conn-> prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES (:LOGIN,:PASSWORD)");

$login = "usu1";
$senha = "!@#$";

$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":PASSWORD", $senha);
$stmt -> execute();

echo "Inserido com sucesso.";
?>