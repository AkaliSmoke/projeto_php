<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do vendedor</title>
</head>
<body>
    <h1>Cadastro de cliente</h1>
    <form action="cadastrar.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome:"><br>
        
        <label>Idade:</label>
        <input type="number" name="idade"  min="0" max="120"><br>

        <label>Gênero:</label><br>
        <input type="radio" id="masc" name="genero" value="masculino">
        <label for="masc">Masculino</label><br>

        <input type="radio" id="fem" name="genero" value="feminino">
        <label for="fem">Feminino</label><br>

        <input type="radio" id="outro" name="genero" value="outro">
        <label for="outro">Outro</label><br>
        
        <label for="tel_contato">Telefone:</label>
        <input type="tel" id="tel_contato" name="telefone" placeholder="(11) 99999-9999">
        <br>

        <label>Estado:</label>
        <input type="number" name="estado"><br>

        <label>Cidade:</label>
        <input type="number" name="cidade"><br>

        <label>CPF:</label>
        <input type="number" name="cpf"><br>

        
        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>