<?php
$ra = $_POST['ra'];
$aluno = $_POST['aluno'];
$idade = $_POST['idade'];

$arquivo = fopen("aluno_db.txt", "a");
fwrite($arquivo, "$ra \t $aluno \t $idade \n");
fclose($arquivo);
?>