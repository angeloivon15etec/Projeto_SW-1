 <!--parte do angelo-->
<?php
session_start();

if (!isset($_SESSION['tentativas'])) {
    $_SESSION['tentativas'] = 0;
}

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

$usuarios = $_SESSION['usuarios'] ?? [];

$login_sucesso = false;
$nome_usuario = "";

foreach ($usuarios as $user) {
    if ($user['usuario'] === $usuario && password_verify($senha, $user['senha'])) {
        $login_sucesso = true;
        $nome_usuario = $user['nome'];
        break;
    }
}


if ($login_sucesso) {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['tentativas'] = 0;
    header("Location: privado.php?nome=$nome_usuario");
    exit();
}

$_SESSION['tentativas']++;

if ($_SESSION['tentativas'] >= 3) {
    echo "❌ Você foi bloqueado por excesso de tentativas. Tente novamente mais tarde.";
    exit();
}

header("Location: error.php");
exit();
?>

