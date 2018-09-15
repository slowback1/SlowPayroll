<?php
$email = $_POST['username']; 
include 'get_all_employees.php';
$result = get_all_employees();
while($row = $result->fetch_assoc()) {
    if($row['email'] == $email) {
        include '../db/connect.php';
        $nuPW = storePW("1234");
        $sql = "UPDATE employeeInfo SET password='$nuPW' WHERE email='$email'";
        if($db->query($sql) == TRUE) {
            include('../login/redirect.php');
            redirect('../employee_login.php?newpassword=set');
            /*
            # If I had a mail server, here is what the password reset function would look like:

            $password = storePW("temp");
            $msg = "Here is your temporary password: \n" . $password;
            mail($email, "password reset", $msg);
            */
        } else {
            echo $db->error;
        }
    }    
}

?>