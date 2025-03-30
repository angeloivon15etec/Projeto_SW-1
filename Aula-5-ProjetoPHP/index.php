<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
<div class="container">
        <img src="assets/img/contact-person-red-icon-free-png.png" alt="Ícone de Usuário" class="user-icon">

        <h2 style="color: #D32F2F; font-weight: bold;">Faça seu Login</h2>
        
        <form action="processa.php" method="post">
            <div data-mdb-input-init class="form-group mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" name="usuario" placeholder="Digite seu email" />
            </div>

            <div data-mdb-input-init class="form-group mb-4">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" id="senha" class="form-control" name="senha" placeholder="Digite sua senha" />
            </div>

            <input type="submit" class="btn btn-primary btn-block mb-4" value="Entrar">
  
            <div class="text-center">
                <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
            </div>
        </form>
    </divv>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
