<?php
    function getConnection() {
        $servername="localhost";
        $username="username";
        $password="";
        $dbname="Form";
    
        try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conectado!";
            return $conn;
    
        // $add_person = $conn->prepare("INSERT INTO person (id, name, address, phone)
        //     VALUES(:id, :name, :address, :phone)");
    
        // $add_person->bindParam(":id", $id);
        // $add_person->bindParam(":name", $name);
        // $add_person->bindParam(":address", $address);
        // $add_person->bindParam(":phone", $phone);
    
        // $add_person->execute();
    
        } catch(PDOException $e){
            echo "PDO error: ". $e->getMessage();
        } catch(Exception $e){
            echo "Exception error: ". $e->getMessage();
        }
    }
?>