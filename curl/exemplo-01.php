<?php
    $cep = "59626250";
    //link para a api
    $link ="viacep.com.br/ws/$cep/json/";

    //iniciando o processo curl
    $ch = curl_init($link);

    //aqui eu estou definindo que eu exijo que tenha um retorno
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    //option para desativar a verificação relacionada a criptografia, se n bora, n funciona o código
    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);

    //executando e guardando o valor retornado em response
    $response = curl_exec($ch);
    //fechando o processo
    curl_close($ch);

    //decodificando o json para uma array, precisa do parametro "true"
    $data = json_decode($response, true);
    print_r($data);
    //echo $link;
?>