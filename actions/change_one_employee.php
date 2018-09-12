<?php
    function get_one_employee($id) {
        include_once '../db/password_hasher.php';
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = '';
    $database = "c9";
    $dbport = 3306;
    
    $db = new mysqli($servername, $username, $password, $database, $dbport);
    
        $qry = "SELECT * FROM employeeInfo where id=$id";
        $result = $db->query($qry);
        return $result;
    }
    
?>