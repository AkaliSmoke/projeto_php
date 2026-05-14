<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastrar Album</title>
</head>
<body>
    <form action="album-salvar.php" method="post">
        <label>Artista:</label>
        <input type="text" name="artista" id="artista" placeholder="Digite o artista:"><br>
        
        <label>Nome do álbum:</label>
        <input type="text" name="album" id="album" placeholder="Digite o álbum:"><br>
        
        <label>Ano de Lançamento:</label>
        <input type="number" name="lancamento" id="lancamento"><br>

        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>