<?php

    class Archive {
        
        //função para criar diretório
        public function criarDir($dir){
            if (!is_dir($dir)) mkdir($dir);
            echo "Diretório criado com sucesso.";
        }//fim criar

        //função para excluir diretório
        public function apagarDir($dir){
            rmdir($dir);
            echo "Diretório excluido com sucesso.";
        }//fim excluir

        //função para escanear a pasta
        public function escanearDir($dir){

            $arquivos = scandir($dir);
            $data= array();

            foreach ($arquivos as $arquivo) {

                if(!in_array($arquivo, array(".",".."))){
                    $filename = $dir.DIRECTORY_SEPARATOR.$arquivo;
                    $info = pathinfo($filename);
                    $info["size"] = filesize($filename);
                    $info['modified'] = date("d/m/Y H:i:s",filemtime($filename)); 
                    array_push($data, $info);
                }
            }

            return json_encode($data,JSON_UNESCAPED_SLASHES);
        }//fim escanear

        //função para escrever em um arquivo
        public function escreverArquivo($dir,$texto){
            $file = fopen($dir,"a+");
            fwrite($file,$texto."\r\n");
            fclose($file);

            echo "Arquivo alterado com sucesso.";
        }

        //função de exclusão de somente um arquivo
        public function excluirArquivo($dir){
            unlink($dir);
            echo "Arquivo excluido com sucesso.";
        }

        //função de exclusão de todos os arquivo sdo diretório
        public function excluirArquivos($dir){

            foreach (scandir($dir) as $arquivo) {
                if (!in_array($arquivo,array(".",".."))) {
                    unlink($dir.DIRECTORY_SEPARATOR.$arquivo);
                }
            }
        }

        //função para a leitura de um arquivo
        public function lerCsv($nome){
            $filename = "CSV".DIRECTORY_SEPARATOR.$nome;
            if(file_exists($filename)){
                
                $file = fopen($filename,"r");
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
                return json_encode($data);
                fclose($file);
            }
        }
        
        //função para upload de arquivos
        public function uparArquivo(){
            $html = "<form method='POST' enctype='multipart/form-data'>";
            $html .= 
                    "<input type='hidden' name='MAX_FILE_SIZE' value='30000'>
                    <input type='file' name='arquivo'>
                   <input type='submit' value='Enviar'>";
            $html .= "</form>";

            if($_SERVER["REQUEST_METHOD"]==="POST"){
                $file = $_FILES["arquivo"];
                
                if ($file["error"]) throw new Exception("Error: ", $file["error"]);

                $dirUploads = "uploads";
                if (!is_dir($dirUploads)) mkdir($dirUploads);

                if(move_uploaded_file($file['tmp_name'], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])){
                    echo "Upload realizado com sucesso.";
                }else echo "O arquivo não foi enviado corretamente.";
            }
                
            
            return $html;
        }

    }
    
?>