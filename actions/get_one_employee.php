<?php
    function get_one_employee($id) {
        include 'db/connect.php';
        $qry = "SELECT * FROM employeeInfo where id=$id";
        $result = $db->query($qry);
        return $result;
    }
    
?>