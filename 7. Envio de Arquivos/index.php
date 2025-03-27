<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Arquivos</title>
</head>
<body>
    <h2>Envie seu arquivo!</h2>
    <form action="imageVerifier.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="name">Nome: </label>
            <input type="text" name="name">
        </p>
        <p>
            <input type="file" name="file">
        </p>
        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>
    <?php if(isset($_SESSION["name"]) && isset($_SESSION["image"])): ?>
        <p><?php echo $_SESSION["name"]?></p>
        <img src="<?php echo $_SESSION["image"]?>"/>
    <?php endif; ?>
</body>
</html>