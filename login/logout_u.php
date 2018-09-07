<?php
    include 'redirect.php';
    
    if( isset($_COOKIE['user'])) {
        unset($_COOKIE['user']);
        setcookie('user', '', time() - 3600, '/');
    }
    redirect('../index.php');
?>