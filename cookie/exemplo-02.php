<?php
    if (isset($_COOKIE["ID"])) {
        $obj = json_decode($_COOKIE["ID"],true);
    }

    print_r($obj);
?>