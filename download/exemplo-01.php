<?php

    $link = "https://i.pinimg.com/564x/93/1f/4a/931f4ae23148d8ec20a816e17957a1fd.jpg";
    
    //lê o arquivo como uma string
    $content = file_get_contents($link);

    //todas as "caracteristicas" do link
    $parse = parse_url($link);
    
    $basename = basename($parse["path"]);
    
    $file = fopen($basename,"w+");

    fwrite($file,$content);
    fclose($file);    
?>

<img src="<?=$basename?>">