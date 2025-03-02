<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = trim($_POST["name"]);
        $email = trim($_POST['email']);
        $sex = $_POST['sex'] === "M" ? "Masculino" : "Feminino";
        $birthdate = $_POST['birthdate'];
        $cep = trim($_POST['cep']);
        $address =  trim($_POST['address']);
        $neighbourhood = trim($_POST['neighbourhood']);
        $city = trim($_POST['city']);
        $state = trim($_POST['state']);
        $wantedEmails = isset($_POST['wanted-emails']) ? 'Sim' : 'Não';

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: sign-up-form.php?erro=email");
            exit();
        }

        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $birthdate)) {
            header("Location: sign-up-form.php?erro=data");
            exit();
        }
    
        $data_formatada = date("d/m/Y", strtotime($birthdate));

    } else {
        header("Location: sign-up-form.php");
        exit();
    }


    echo "<h2>Dados Cadastrados: </h2>";
    echo "<p><strong>Nome: </strong>$name</p>";
    echo "<p><strong>E-mail: </strong>$email</p>";
    echo "<p><strong>Sexo: </strong>$sex</p>";
    echo "<p><strong>Data de Nascimento: </strong>$birthdate</p>";
    echo "<p><strong>CEP: </strong>$cep</p>";
    echo "<p><strong>Endereço: </strong>$address</p>";
    echo "<p><strong>Bairro: </strong>$neighbourhood</p>";
    echo "<p><strong>Cidade: </strong>$city</p>";
    echo "<p><strong>Estado: </strong>$state</p>";
    echo "<p><strong>Quer receber e-mails: </strong>$wantedEmails</p>";
?>