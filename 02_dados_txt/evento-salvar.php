<?php
$nome = $_POST['nome'];
$evento = $_POST['evento'];
$data = $_POST['data'];
$descricao = $_POST['descricao'];

$arquivo = fopen("evento_db.txt", "a");
fwrite($arquivo, "$nome \t $evento \t $data \t $descricao \n");
fclose($arquivo);
?>