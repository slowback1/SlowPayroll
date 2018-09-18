<?php
    include 'db/connect.php';
    include 'login/redirect.php';
    $pwd = storePW('1234');
    $qry = "UPDATE adminUsers SET password='$pwd' WHERE id=1";
    if($db->query($qry) == TRUE) {
        redirect('employer_login.php?ecode=forgotpassword');
    } else {
        echo $db->error;
    }
?>