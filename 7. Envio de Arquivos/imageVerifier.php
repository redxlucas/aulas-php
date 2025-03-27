<?php
    session_start();

    define("PATH", "uploads/");
    if(!is_dir(PATH)) {
        mkdir(PATH, 0777, true);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"]) && isset($_POST["name"])) {
        define("FILE_MAX_SIZE", 30 * 1024);

        $file = $_FILES['file'];
        $file_name = md5_file($file['tmp_name']) . ".jpg";
        $file_path = PATH . $file_name;

        if($file["size"] > FILE_MAX_SIZE) {
            die("Erro: Tamanho máximo permitido: 30KB.");
        }

        move_uploaded_file($file["tmp_name"], $file_path);

        $_SESSION["name"] = $_POST["name"];
        $_SESSION["image"] = $file_path;
        header("Location: index.php");
        exit();
    }
?>