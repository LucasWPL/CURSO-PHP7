<?php
    //definindo qual vai ser o tipo da minha img
    header("Content-Type: image/png");

    //definindo uma variável para referencia e seu devido tamanho 
    $image = imagecreate(512,512);

    //cliando a cor preta
    $black = imagecolorallocate($image, 0, 0, 0);
    //cliando a cor vermelha
    $red = imagecolorallocate($image,255, 0, 0);

    //criando a imagem em si
    imagestring($image, 5, 200, 250, "Pedro Lucas",$red);

    //renderizando a imagem
    imagepng($image);

    //fechando a variável de referência
    imagedestroy($image);

?>