<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'] ?? '';
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (empty($nome) || empty($usuario) || empty($senha)) {
        echo "❌ Preencha todos os campos!";
        exit();
    }

    foreach ($_SESSION['usuarios'] as $user) {
        if ($user['usuario'] === $usuario) {
            echo "❌ Erro: Usuário já existe!";
            exit();
        }
    }

    $_SESSION['usuarios'][] = [
        "nome" => $nome,
        "usuario" => $usuario,
        "senha" => password_hash($senha, PASSWORD_DEFAULT)
    ];

    echo "✅ Cadastro realizado com sucesso!";
    header("Location: index.php");
    exit();
}
?>

