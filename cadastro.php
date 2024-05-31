

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="cad">
        <h1>Cadastrar usuario: </h1>
        <form method="POST"action="envia.php">
            <label for="nome">NOME: </label>
            <input type="text" id="nome" size="60" name="nome" maxlength="100"><br>
            
            <label for="idade">IDADE: </label>
            <input type="number" id="idade" name="idade">

            <label for="cpf">CPF: </label>
            <input type="text" id="cpf" size= "26" name="cpf" maxlength="14" pattern="\d{3}\.\d{3}\.\d{3}-d\{2}" required title="digite o Cpf no formato 999.999.999-99"><br>
            
            <button type="submit">ENVIAR DADOS</button>
                       

        </form>
    </div>
    
   
</body>
</html>

