<?php 
    function delete_employee($id) {
        include '../db/connect.php';
        include '../login/redirect.php';
        
        $qry = "DELETE FROM employeeInfo WHERE ID=$id";
        if($db->query($qry) === TRUE) {
            redirect('../view_employees.php');
        } else {
            echo "error: " . $db->error;
        }
    }
    delete_employee($_POST['id']);
    include '../login/redirect';
    redirect('../view_employees.php');
?>

