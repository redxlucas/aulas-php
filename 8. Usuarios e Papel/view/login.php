<?php
    session_start();
    require '../model/User.php';

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = User::findByEmail($email);
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
        <label for="email">Email: 
            <input type="email" name="email" value="">
        </label>
        <label for="password">Senha: 
            <input type="password" name="password" value="">
        </label>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>