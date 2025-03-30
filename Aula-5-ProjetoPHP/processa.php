<?php
session_start();

// Inicializa tentativas se ainda não existir
if (!isset($_SESSION['tentativas'])) {
    $_SESSION['tentativas'] = 0;
}

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

// Pega os usuários cadastrados
$usuarios = $_SESSION['usuarios'] ?? [];

// Variável para verificar se o login foi bem-sucedido
$login_sucesso = false;
$nome_usuario = "";

// Verifica se o usuário existe e a senha está correta
foreach ($usuarios as $user) {
    if ($user['usuario'] === $usuario && password_verify($senha, $user['senha'])) {
        $login_sucesso = true;
        $nome_usuario = $user['nome'];
        break;
    }
}

// ✅ Se o login for bem-sucedido:
if ($login_sucesso) {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['tentativas'] = 0; // Reseta tentativas
    header("Location: privado.php?nome=$nome_usuario");
    exit();
}

// ❌ Se o login falhou, aumenta a tentativa
$_SESSION['tentativas']++;

// 🔴 Se for a 3ª tentativa, bloqueia
if ($_SESSION['tentativas'] >= 3) {
    echo "❌ Você foi bloqueado por excesso de tentativas. Tente novamente mais tarde.";
    exit();
}

// Se o login falhar, redireciona para erro.php
header("Location: error.php");
exit();
?>

