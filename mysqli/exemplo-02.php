<?php

$conn = new mysqli("127.0.0.1","root","","curso-php7");

if ($conn->connect_error) {
    echo "Erro: ".$conn->connect_error;
}

$res = $conn -> query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$dados = array();
while ($row = $res->fetch_assoc()) {
    array_push($dados,$row);
}

echo json_encode($dados);


?>