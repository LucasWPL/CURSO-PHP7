<?php

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1","root","");

$stmt = $conn-> prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 7;
$stmt -> bindParam(":ID", $id);

$stmt -> execute();

echo "Deletado com sucesso.";
?>