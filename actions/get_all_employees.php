<?php
    function get_all_employees() {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "payroll";
    
    $db = new mysqli($hostname, $username, $password, $dbname);
    
        $qry = "SELECT * FROM employeeInfo";
        $result = $db->query($qry);
        return $result;
    }
?>