<?php
    require_once("config.php");

    $sql = new Sql();
    $usuarios = $sql-> select("SELECT * FROM tb_usuarios ORDER BY deslogin");
    $headers = array();

    foreach ($usuarios[0] as $key => $value) {//abrindo uma linha da tabela
        array_push($headers,ucfirst($key));//enviando os cabeçalhos da tabela para headers
    }
    $file = fopen("usuarios.csv","w+");
    fwrite ($file, implode(",",$headers)."\r\n");//escrevendo  no arquivo os cabeçalhos

    

    foreach ($usuarios as $row) {//acessando cada linha da tabela

        $data = array();//array de dados para serem enviados ao file
        
        foreach ($row as $key => $value) {//acessando e enviando o valor de cada coluna da tabela para a array data
            array_push($data, $value);
        
        }
        //escrevendo cada linha da tabela no file e adicionando o separador , por meio do implode
        fwrite($file, implode(",",$data) . "\r\n");
    }

    echo "Alterações efetuadas com sucesso.";
    fclose($file);
?>