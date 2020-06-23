<?php


    $nome = $_POST["name"];
    $ch = curl_init();

    //conectando por meio do curl
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    //tirando a verificação de segurança
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    //enviando as informações necessárias para a validação do captcha
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
        "secret"=> "6Ldrs6gZAAAAAEO7Qf8iplhmZKy_Had7fh5xxVfw",
        "response"=>$_POST["g-recaptcha-response"],
        "remoteip"=>$_SERVER["REMOTE_ADDR"]
    )));

    //exigindo um retorno na execução
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $rec = json_decode(curl_exec($ch),true);

    curl_close($ch);

    if ($rec["success"]=== true) {
        echo "Deu bom, ". $nome;
    }else {
        //mandando voltar para a página inicial
        header("Location: exemplo-02.html");
    }
?>