<?php
    include_once("Connection.php");

    class Person {
        private string $id;
        private string $name;
        private string $address;
        private string $phone;
 
        function _construct(string $id, string $name, string $address, string $phone): void {
            $this->id = $id;
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
            $stmt = $conn->prepare("INSERT INTO person (id, name, address, phone)
            VALUES(:id, :name, :address, :phone)");
    
            $stmt->bindParam(":id", $this->id);
            $stmt->bindParam(":name", $this->name);
            $stmt->bindParam(":address", $this->address);
            $stmt->bindParam(":phone", $this->phone);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
?>