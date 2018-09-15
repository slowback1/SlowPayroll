<?php 
    include_once '../db/connect.php';
    include 'validate.php';
    $old_email = $_POST['email_old'];
    $old_password = $_POST['password_old'];
    $new_email = $_POST['email'];
    $new_email_two = $_POST['email_two'];
    $id = $_POST['id'];
    
    if(validate($id, $old_email, $old_password) && $new_email == $new_email_two) {
        $qry = "UPDATE employeeInfo SET email='$new_email' WHERE id='$id'";
        if($db->query($qry) == TRUE) {
            include '../login/redirect.php';
            redirect('../index.php');
        }
         else {
             echo $db->error;
         }
    } else {
        echo "please recheck your entries";
        include '../login/redirect.php';
        redirect("../user_settings_form.php?ecode=badinfo&type=email&id=$id");
    }
    
?>