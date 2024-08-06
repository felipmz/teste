<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>
<body>
    <div class="Formulario" style="text-align: center;padding-top: 20%;">
        <form action="Connect_HTML-php.php" method="POST">
            <div>
                <label for="Nome">Nome Completo:</label>
                <input type="text" name="Nome" id="Nome" required>
            </div>
            <div>
                <label for="Endereco">Endereço:</label>
                <input type="text" name="Endereco" id="Endereco" required>
            </div>
            <div>
                <label for="Email">Email:</label>
                <input type="email" name="Email" id="Email" required>
            </div>
            <div>
                <label for="Telefone">Telefone:</label>
                <input type="number" name="Telefone" id="Telefone" required>
            </div>
            <div>
                <label for="D_nascimento">Seu aniversário:</label>
                <input type="date" name="D_nascimento" id="D_nascimento" required>
            </div>
            <div>
                <input type="submit" value="Cadastrar !">
            </div>
            <div>
                <a href="pagina_inicial.php"><input type="button" value="Voltar"></a>
            </div>
        </form>
    </div>
</body>
</html>