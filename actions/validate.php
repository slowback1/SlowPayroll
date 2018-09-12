<?php

function validate($id, $email, $password) {
    include_once 'change_one_employee.php';
    $j = get_one_employee($id);
    $nwpd = storePW($password);
    while($row = $j->fetch_assoc()) {
       if($email == $row['email'] && $nwpd == $row['password']) {
           return true;
       } 
    }
    return false;
}

?>