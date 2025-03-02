<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
</head>
<body>
<?php if (isset($_GET['erro'])): ?>
        <p style="color: red;">
            <?php
            switch ($_GET['erro']) {
                case 'email': echo "E-mail inválido!"; break;
                case 'data': echo "Data de nascimento inválida!"; break;
                case 'campos': echo "Preencha todos os campos!"; break;
                default: echo "Erro desconhecido!";
            }
            ?>
        </p>
<?php endif; ?>
    <form action="sign-up.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Login</legend>
            <label>Nome: <input type="text" name="name" ></label><br>
            <label>E-mail: <input type="text" name="email" ></label><br>
            <label>Sexo:
                <input type="radio" name="sex" value="M"> Masculino
                <input type="radio" name="sex" value="F"> Feminino
            </label><br>
            <label>Data de Nascimento: <input type="date" name="birthdate"></label><br>
            <label>Cep: <input type="text" name="cep"></label><br>
            <label>Endereço: <input type="text" name="address"></label><br>
            <label>Bairro: <input type="text" name="neighbourhood"></label><br>
            <label>Cidade: <input type="text" name="city" ></label><br>
            <label>Estado: <input type="text" name="state" ></label><br>

            <label>Deseja receber e-mails? <input type="checkbox" name="wanted-emails"></label><br>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>
</html>
