<?php
    require_once("../config/Connection.php");
    getConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form action="" method="post">
        <p>
            <label for="fullName">Nome Completo</label>
            <input type="text" name="fullName" />
        </p>
        <p>
            <label for="email">E-mail</label>
            <input type="email" name="email" />
        </p>
        <p>
            <label for="password">Senha</label>
            <input type="password" name="password" />
        </p>
        <p>
            <label for="roles">Papel</label>
            <select name="roles">
                <option>Padrão</option>
                <option>Administrador</option>
            </select>
        </p>
        <p><button onclick="submit">Logar</button></p>
        </p>
        <p>Já possui uma conta? <a href="login.php">Entre aqui</a></p>
    </form>
</body>
</html>