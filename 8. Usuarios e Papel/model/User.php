<?php
    include_once("../config/Connection.php");
    
    class User {
        private $name;
        private $email;
        private $password;
        private $isDeleted;
        private $role;

        function __construct($name, $email, $password) {
            $this->name = $name;
            $this->email = $email;
            $this->password = password_hash($password, PASSWORD_DEFAULT);
            $this->isDeleted = false;
        }

        public function save() {
            $conn = getConnection();
            $stmt = $conn->prepare("INSERT INTO user (name, email, password)
            VALUES(:name, :email, :password)");
    
            $stmt->bindParam(":name", $this->name);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":password", $this->password);
            $stmt->execute();
        }

        public static function findByEmail($email) {
            $conn = getConnection();

            $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            
            return $stmt->fetch();
        }

        // public static function findAll() {
        //     $conn = getConnection();
        //     $stmt = $conn->query("SELECT * FROM person");
        //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
        // }

        // public static function delete(int $id) {
        //     $conn = getConnection();
        //     $stmt = $conn->prepare("UPDATE FROM person SET is_deleted = true WHERE id = :id");
        //     $stmt->bindParam(":id", $id);
        //     return $stmt->execute();
        // }
    }
?>