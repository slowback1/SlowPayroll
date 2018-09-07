<?php
    include 'redirect.php';
    
    if( isset($_COOKIE['admin'])) {
        unset($_COOKIE['admin']);
        setcookie('admin', '', time() - 3600, '/');
    }
    redirect('../index.php');
?>