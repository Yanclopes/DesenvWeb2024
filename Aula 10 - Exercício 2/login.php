<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'] ?? '';
    $senha = $_POST['senha'] ?? '';
    if ($login === 'usuario' && $senha === 'senha123') {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $_SESSION['inicio_sessao'] = date('Y-m-d H:i:s');
        $_SESSION['ultima_requisicao'] = $_SESSION['inicio_sessao'];
        header("Location: dashboard.php");
        exit;
    } else {
        $erro = "Login ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($erro)) { echo "<p style='color: red;'>$erro</p>"; } ?>
    <form method="POST" action="">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
