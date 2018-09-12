<?php
    include_once 'login/redirect.php';
    
    if($isLoggedInEmployee || $isLoggedInEmployer) {
        redirect('index.php');
    }
?>