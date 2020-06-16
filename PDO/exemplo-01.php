<?php

$conn = new PDO("mysql:dbname=curso-php7;host=127.0.0.1","root","");

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