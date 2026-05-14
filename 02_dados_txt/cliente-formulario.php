<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do vendedor</title>
</head>
<body>
    <h1>Cadastro de cliente</h1>
    <form action="cliente-salvar.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome:"><br>
        
        <label>Idade:</label>
        <input type="number" name="idade" id="idade"  min="0" max="120"><br>

        <label>Gênero:</label><br>
        <input type="radio" id="masc" name="genero" value="masculino">
        <label for="masc">Masculino</label><br>

        <input type="radio" id="fem" name="genero" value="feminino">
        <label for="fem">Feminino</label><br>

        <input type="radio" id="outro" name="genero" value="outro">
        <label for="outro">Outro</label><br>
        
        <label for="tel_contato">Telefone:</label>
        <input type="tel" id="tel_contato" name="telefone" placeholder="(99) 99999-9999">
        <br>

        <label>Estado:</label>
        <select name="estado" id="estado">
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
        </select><br>

        <label>Cidade:</label>
        <input type="text" id="cidade" name="cidade"><br>

        <label>CPF:</label>
        <input type="text" id="cpf" name="cpf"><br>

        
        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>