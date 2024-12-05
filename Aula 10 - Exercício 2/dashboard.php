<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$agora = date('Y-m-d H:i:s');
$inicioSessao = new DateTime($_SESSION['inicio_sessao']);
$ultimaRequisicao = new DateTime($_SESSION['ultima_requisicao']);
$tempoSessao = $inicioSessao->diff(new DateTime($agora))->format('%H:%I:%S');

$_SESSION['ultima_requisicao'] = $agora;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem-vindo, <?= htmlspecialchars($_SESSION['login']) ?>!</h1>
    <p><strong>Login:</strong> <?= htmlspecialchars($_SESSION['login']) ?></p>
    <p><strong>Senha:</strong> <?= htmlspecialchars($_SESSION['senha']) ?></p>
    <p><strong>Data/hora início da sessão:</strong> <?= $_SESSION['inicio_sessao'] ?></p>
    <p><strong>Data/hora da última requisição:</strong> <?= $agora ?></p>
    <p><strong>Tempo de sessão:</strong> <?= $tempoSessao ?></p>
    <a href="logout.php">Sair</a>
</body>
</html>
