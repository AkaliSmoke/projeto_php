<?php
$artista = $_POST['artista'];
$album = $_POST['album'];
$lancamento = $_POST['lancamento'];

$arquivo = fopen("aluno_db.txt", "a");
fwrite($arquivo, "$artista \t $album \t $lancamento \n");
fclose($arquivo);
?>