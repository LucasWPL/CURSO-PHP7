<?php

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1","root","");

$stmt = $conn-> prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$id = 7;
$login = "ploc";
$senha = "poiuyt";

$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":PASSWORD", $senha);
$stmt -> bindParam(":ID", $id);
$stmt -> execute();

echo "Update realizado com sucesso.";
?>