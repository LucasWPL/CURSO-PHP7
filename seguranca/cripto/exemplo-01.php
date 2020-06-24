<?php

    //definindo as chaves
    define ('SECRET', pack('a16', 'senha'));
    define ('SECRET_IV', pack('a16', 'senha'));

    //dados a serem encriptados
    $data = array(
        "nome"=>"Lucas"
    );

    //inicio da encriptação
    $openssl = openssl_encrypt(
        json_encode($data),
        'AES-128-CBC',
        SECRET,
        0,
        SECRET_IV
    );
    
    var_dump($openssl);

    //descriptação
    $string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);

    var_dump(json_decode($string,true));
?>
