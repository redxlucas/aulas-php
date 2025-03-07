<?php
    if(!session_start()) {
        session_start();
        $_SESSION['count'] = 0;
    }

    echo $_SESSION['count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessões e Cookies</title>
</head>
<body>
    <form action="add.php" method="post">
        <input type="submit" value="Add" name="newSession" />
    </form>
    <form action="reset.php" method="post">
        <input type="submit" value="Reset" name="newSession" />
    </form>
</body>
</html>