<?php

    header("Content-Type: image/jpeg");
    $image = imagecreatefromjpeg("img/certificado.jpg");

    $tittleColor = imagecolorallocate($image, 0, 0, 0);
    $gray = imagecolorallocate($image, 100, 100, 100);


    //eu usei a constante dir pq a bilioteca gd estava endoidando na hora de procurar o diretório
    imagettftext ($image, 32, 0, 330, 150, $tittleColor, __DIR__.DIRECTORY_SEPARATOR.
    "fonts".DIRECTORY_SEPARATOR."Bevan-Regular.ttf","CERTIFICADO");
    imagettftext ($image, 32, 0, 430, 350, $tittleColor, __DIR__.DIRECTORY_SEPARATOR.
    "fonts".DIRECTORY_SEPARATOR."Playball-Regular.ttf","Pedro Lucas da C. Dantas");
    imagestring($image, 5, 430, 370, utf8_decode("Concluído em: ").date("d-m-Y"), $gray);

    imagejpeg($image);
    imagedestroy($image);

?>