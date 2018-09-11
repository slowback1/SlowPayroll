<?php 
    include '../db/connect.php';
    include '../login/redirect.php';
    $benefit = $_POST['benefit'];
    $id = $_POST['id'];
    $sql = "UPDATE employeeInfo SET benefit_plan='$benefit' WHERE id='$id'";
    
    
    if($db->query($sql) == TRUE) {
        redirect('../index.php');
    } else {
        echo $db->error;
    }



?>