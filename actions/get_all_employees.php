<?php
    function get_all_employees() {
        include 'db/connect.php';
        $qry = "SELECT * FROM employeeInfo";
        $result = $db->query($qry);
        return $result;
    }
?>