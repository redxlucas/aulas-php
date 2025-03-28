<?php
    function getConnection() {
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="login_system";
    
        try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // $sql = file_get_contents("../8. Orientação à Objetos/config/database.sql");
            // $conn->exec($sql);

            return $conn;

        } catch(PDOException $e){
            echo "PDO error: ". $e->getMessage();
        } catch(Exception $e){
            echo "Exception error: ". $e->getMessage();
        }
    }
?>