<?php
//pt-BR = LINUX, portuguese = WINDOWS
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo date("l, d/m/Y  H:i:s");

//UCWORDS É PARA DEIXAR AS LETRAS MAIUSCULAS, STRFTIME É A FUNÇÃO PARA EXIBIR AS DATAS COM O IDIOMA CERTO
echo "<br>".ucwords(strftime("%A"));

//CLASSE DATETIME PRÉ-DEFINIDA

$data = new DateTime();

echo "<br>".$data->format("d/M/Y");

$periodo = new DateInterval("P15D");
?>