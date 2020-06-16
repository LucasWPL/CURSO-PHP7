<?php

    $pessoas = array();

    array_push($pessoas, array(
        'nome'=>'Pedro Lucas',
        'idade'=>17
    ));

    array_push($pessoas, array(
        'nome'=>'Lucresol Junior',
        'idade'=>22
    ));

    echo json_encode($pessoas);
?>