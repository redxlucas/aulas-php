<?php
    $limit =  $_GET['limit'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Castigo do Bart</title>
</head>
<body>
    <h1>Castigo do Bart</h1>

    <ul>
<?php
    for($i = 0; $i < $limit; $i++){
?>
    <li>Não posso jogar melancia na professora.</li>
<?php
    }
?> 
    </ul>

</body>
</html>