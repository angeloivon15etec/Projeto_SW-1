<?php
$usuario = $_POST['nome'];
$senha = $_POST['senha'];

if ($usuario == 'francisco' && $senha == '2469') {
    $nome = "rodolfo";
header("Location: privado.php?nome=" . urlencode($nome));
    exit();
} else {
header("Location: error.php");
    exit();
}
?>