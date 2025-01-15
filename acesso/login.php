<?php 
defined('CONTROL') or die("Acesso negado!");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario_login'];
    $senha =$_POST['senha_login'];
    $mensagemErro = null; // variavel para armazenar a mensagem de erro

    if (empty($usuario) || empty($senha)) {
        $mensagemErro = "User e senha são obrigatorios!";
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
<h3>Teste de login</h3>
<body>
    <form action="login.php?menuOp=login" method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario_login" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha_login" required>
        <br>
        <button type="submit">Logar!</button>
    </form>
</body>
</html>