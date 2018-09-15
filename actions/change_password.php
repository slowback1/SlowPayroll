<?php

    include 'validate.php';
    include_once '../db/connect.php';
    $old_email = $_POST['email_old'];
    $old_password = $_POST['password_old'];
    $new_password = storePW($_POST['password']);
    $new_password_two = storePW($_POST['password_two']);
    $id = $_POST['id'];
    
    if(validate($id, $old_email, $old_password) && $new_password == $new_password_two) {
        $qry = "UPDATE employeeInfo SET password='$new_password' WHERE id='$id'";
        if($db->query($qry) == TRUE) {
            include '../login/redirect.php';
            redirect('../index.php');
        } else {
            echo $db->error;
        }
    } else {
        echo "please recheck your entries";
        include '../login/redirect.php';
        redirect("../user_settings_form.php?ecode=badinfo&type=password&id=$id");
    }
?>