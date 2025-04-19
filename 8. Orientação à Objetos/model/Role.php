<?php
    require_once("../helpers/DataAccess.php");
    
    class Role {

        use DataAccess;

        private int $id;
        private String $name;
    }
?>