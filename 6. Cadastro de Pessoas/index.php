<?php
    include("Connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Pessoas</h1>

    <form method="post">
        <p>
            <label for="name">Nome: 
                <input type="text" name="name" value="">
            </label>
        </p>
        <p>
            <label for="address">Endereço: 
                <input type="text" name="address" value="">
            </label>
        </p>
        <p>
            <label for="phone">Telefone: 
                <input type="text" name="phone" value="">
            </label>
        </p>
        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>
</body>
</html>