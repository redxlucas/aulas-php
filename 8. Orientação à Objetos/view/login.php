<?php
    require_once("../model/Role.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $user = new User();

        $user->setName("Administrador");
    } 
    
    $role = new Role();

    $role->setName("Administrador");

    echo $role->getName();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
        <p>
        <label for="email">E-mail</label>
        <input type="email" name="email" />
        </p>
        <p>
        <label for="password">Senha</label>
        <input type="password" name="password" />
        <p><button onclick="submit">Logar</button></p>
        </p>
        <p>Não possui uma conta? <a href="sign-up.php">Cadastre-se aqui</a></p>
    </form>
</body>
</html>