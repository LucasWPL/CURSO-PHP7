<?php

    //informando qual vai ser o tipo de arquivo
    header("Content-Type: jpeg");

    //abrindo o arquivo a ser editado
    $image = imagecreatefromjpeg("img/certificado.jpg");

    //definindo as cores
    $tittleCollor = imagecolorallocate($image,0,0,0);
    $gray = imagecolorallocate($image,100,100,100);

    //ESSE BLOCO É TIPO UM STATEMENT
    imagestring($image, 5, 450, 150, "CERTIFICADO", $tittleCollor);
    imagestring($image, 5, 440, 350, "Pedro Lucas da Costa Dantas", $tittleCollor);
    imagestring($image, 5, 440, 370, "Emitido em: ".date("d-m-Y"), $gray);

    //renderizando a imagem
    //caso eu quero salvar em um espaço físico da memória é só eu botar o segundo parâmetro com o nome do arquivo
    //que eu quero
    //SE EU QUISER DIMINUIR A QUALIDADE DA FOTO, BOTO O TERCEIRO PARÂMETRO COM A QUANTIDADE DE BYTES EM PORCETAGEM
    //EM RELAÇÃO AO TOTAL
    imagejpeg($image,"img/certificado".date("d-m-Y").".jpg",50);

    //fechando a variável
    imagedestroy($image);
?>