<?php

$id = rand(1000000000000,90000000000000000);
setcookie("ID",json_encode($id), time()+3600);

?>