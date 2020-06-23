<?php

    if (isset($_POST['name'])) {
        //  htmlentities serve para anular as entradas de comando
        echo $_POST['name'];
    }

?>

<form method="POST">

    <input type="text" name="name">
    <button type="submit">Send</button>

</form>