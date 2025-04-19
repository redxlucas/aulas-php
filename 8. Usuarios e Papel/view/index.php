<?php
    include_once '../model/User.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = new User(
            trim($_POST['name']), 
            trim($_POST['email']), 
            trim($_POST['password'])
        );

        $user->save();
    }
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>

    <form action="" method="post">
        <label for="name">Nome: 
            <input type="text" name="name" value="">
        </label>
        <label for="email">Email: 
            <input type="email" name="email" value="">
        </label>
        <label for="password">Senha: 
            <input type="password" name="password" value="">
        </label>
        <select name="roles" id="roles">
            <option disabled selected>Escolha um papel</option>
            <option value="customer">Cliente</option>
            <option value="administrator">Administrador</option>

        </select>
        </label>
        <button type="submit">Enviar</button>
    </form>

    <p>Já possui cadastro? <a href="login.php">Entre aqui</a></p>
</body>
</html>