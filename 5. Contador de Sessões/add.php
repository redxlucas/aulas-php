<?php
    if(session_start()) {
        $_SESSION['count'] += 1;
    }
    
    header('Location: index.php')
?>