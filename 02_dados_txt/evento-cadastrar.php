<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de eventos</title>
</head>
<body>
    <form action="evento-salvar.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome:"><br>
        
        <label>Evento:</label>
        <select id="evento" name="evento" required>
            <option value="" disabled selected>Selecione um evento</option>
            <option value="show">Show</option>
            <option value="formatura">Formatura</option>
        </select><br>


        <label>Data:</label>
        <input type="date" name="data" id="data"></input><br>

        <label>Descrição:</label>
        <textarea id="descricao" name="descricao">
        </textarea><br>

        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>