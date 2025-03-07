<?php
    if(session_start()) {
        $_SESSION['count'] = 0;
    }

    header('Location: index.php')
?>