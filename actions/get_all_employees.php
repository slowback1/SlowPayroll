<?php
    function get_all_employees() {
       $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = '';
    $database = "c9";
    $dbport = 3306;
    
    $db = new mysqli($servername, $username, $password, $database, $dbport);
    
        $qry = "SELECT * FROM employeeInfo";
        $result = $db->query($qry);
        return $result;
    }
?>