<?php

$conn = new PDO("sqlsrv:Database=dbphp7; server=localhost\SQLEXPRESS; ConnectionPooling=0","sa","root");

$stmt = $conn-> prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt-> execute();

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($res as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>".$key.":</strong>".$value."<br>";
    }
    echo "-------------------------------------------<br>";
}

?>