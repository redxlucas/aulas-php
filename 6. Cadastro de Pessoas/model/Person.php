<?php
    include_once("../config/Connection.php");

    class Person {
        private string $id;
        private string $name;
        private string $address;
        private string $phone;
 
        function __construct(string $name, string $address, string $phone) {
            $this->name = $name;
            $this->address = $address;
            $this->phone = $phone;
        }

        public function getId(): string {
            return $this->id;
        }

        public function getName(): string {
            return $this->name;
        }

        public function getAddress(): string {
            return $this->address;
        }

        public function getPhone(): string {
            return $this->phone;
        }

        public function save() {
            $conn = getConnection();
            $stmt = $conn->prepare("INSERT INTO person (name, address, phone)
            VALUES(:name, :address, :phone)");
    
            $stmt->bindParam(":name", $this->name);
            $stmt->bindParam(":address", $this->address);
            $stmt->bindParam(":phone", $this->phone);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public static function findAll() {
            $conn = getConnection();
            $stmt = $conn->query("SELECT * FROM person");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function delete(int $id) {
            $conn = getConnection();
            $stmt = $conn->prepare("DELETE FROM person WHERE id = :id");
            $stmt->bindParam(":id", $id);
            return $stmt->execute();
        }
    }
?>