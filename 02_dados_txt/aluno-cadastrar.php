<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
</head>
<body>
    <form action="aluno-salvar.php" method="post">
        <label>RA:</label>
        <input type="text" name="ra" id="ra" placeholder="Digite o seu RA:"><br>
        
        <label>Nome:</label>
        <input type="text" name="aluno" id="aluno" placeholder="Digite o nome completo:"><br>
        
        <label>Idade:</label>
        <input type="number" name="idade" id="idade"><br>

        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>