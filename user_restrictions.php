<?php include_once 'login/redirect.php';
    if(!$isLoggedInEmployee) {
        redirect('index.php');
    }
    
    ?>