<?php

    header("Content-Type: image/jpeg");

    $file = "img/wallpaper.jpg";
    $new_widht = 256;
    $new_height = 256;

    //list serve para criar várias variáveis partindo de uma array, os campos 1 e 2 de getimagesize($file)
    //retornam a widtch e a height 
    list($old_widht, $old_height) = getimagesize($file);

    //imagecreatetruecolor carrega uma paleta muita mais diversificada de cores
    $new_image = imagecreatetruecolor($new_widht, $new_height);
    $old_image = imagecreatefromjpeg($file);

    //criando a thumb
    imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_widht,$new_height,$old_widht, $old_height);
    
    //renderizando
    imagejpeg($new_image);

    imagedestroy($file);
    imagedestroy($new_image)

?>