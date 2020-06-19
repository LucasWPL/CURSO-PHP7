<?php

    $filename = "usuarios.csv";

    //verificação se o arquivo existe ou não
    if(file_exists($filename)){

        $file = fopen ($filename, "r");
    
        //explode foi usado para retirar as , assim transformando o file em uma array
        //pegou somente a primeira linha do arquivo que se tratava dos cabeçalhos
        //fgets funciona pegando apenas uma linha por vez
        $headers = explode(",", fgets($file));

        $data = array();
        while ($row = fgets($file)) {

            $rowData = explode(",", $row); 
            $linha = array();

            for ($i=0; $i < count($headers); $i++) { 
                $linha[$headers[$i]] = $rowData[$i];
            }

            array_push($data,$linha);
        }

        json_encode($data);
        
        fclose($file);
    }
?>