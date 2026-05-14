<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$genero = $_POST['genero'] ;
$telefone = $_POST['telefone'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$cpf = $_POST['cpf'];

$arquivo = fopen("cliente_db.txt", "a");
fwrite($arquivo, "$nome \t $idade \t $genero \t $telefone \t $estado \t $cidade \t $cpf \n ");
fclose($arquivo);
?>