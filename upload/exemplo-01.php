<form method="POST" enctype="multipart/form-data">
<input type="file" name="fileUpload">
<input type="submit" value="Send">
</form>

<?php

    if ($_SERVER["REQUEST_METHOD"]==="POST") {
        
        //atribuindo o nome do arquivo
        $file= $_FILES["fileUpload"];

        //verificando se tem algum erro no arquivo
        if ($file["error"]) throw new Exception("Error: ", $file["error"]);

        $dirUploads = "uploads";

        //verificando se o diretório já existe
        if (!is_dir($dirUploads)) mkdir($dirUploads);

        //movendo o file do campo temporário para a memória física do computador
        if(move_uploaded_file($_FILES["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
            echo "Upload realizado com sucesso.";
        }else throw new Exception("Erro no upload");
        
        

    }

?>