<?php

    //scandir retorna todos os arquivos que tem no diretório
    $images = scandir("images");
    $data = array();
    
    //vai rodar em cada uma das imagens
    foreach ($images as $img) {
        //if para não rodar o foreach nas pastas '.' e '..'
        if (!in_array($img, array(".",".."))) {
            //diretório completo
            $filename = "images".DIRECTORY_SEPARATOR.$img;
            //informações sobre o arquivo
            $info = pathinfo($filename);
            //adicionando informação sobre o tamanho
            $info['size'] = filesize($filename);
            //adicionando informação sobre a data de modificação
            $info['modified'] = date("d/m/Y H:i:s",filemtime($filename));
            //adicionando link para a pessoa acessar a imagem
            $info['url'] = "http://localhost/PHP/DIR/". str_replace("\\","/",$filename);
            //enviando as informações de info para data
            array_push($data,$info);
        }
        
    }

    //o parÂmetro JSON_UNESCAPED_SLASHES é para arrumar o erro das \/
    echo json_encode($data,JSON_UNESCAPED_SLASHES);
?>