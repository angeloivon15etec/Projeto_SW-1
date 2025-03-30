<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <h2>🍔 Criar Conta</h2>
        <form action="processa_cadastro.php" method="post">
            <input type="text" name="nome" placeholder="Nome Completo">
            <input type="email" name="usuario" placeholder="Email">
            <input type="password" name="senha" placeholder="Senha">
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
