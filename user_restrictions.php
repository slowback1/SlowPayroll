<?php include 'login/redirect.php';
    if(!$isLoggedInEmployee) {
        redirect('index.php');
    }
    
    ?>