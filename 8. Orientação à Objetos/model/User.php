<?php 
    require_once("../helpers/DataAccess.php");

    class User {
        use DataAccess;

        private String $email;
        private String $password;
        private String $fullName;
        private Role $role;
        
    }
?>