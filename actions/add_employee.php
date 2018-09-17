<?php 

include '../db/connect.php';
include '../login/test_input.php';
include '../login/redirect.php';


$firstname = test_input($_POST['firstname']);
$lastname = test_input($_POST['lastname']);
$email = test_input($_POST['email']);
$salary = test_input($_POST['salary']);
$salary_type = $_POST['salary_type'];
$pay_schedule = $_POST['pay_schedule'];

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    redirect('../add_employee.php?ecode=bademail');
}
if(($salary_type == 'annual' && $salary < 22880) || ($salary_type == 'hourly' && $salary < 11)) {
    redirect('../add_employee.php?ecode=lowsalary');
}


$sql = "INSERT INTO employeeInfo (firstname, lastname, email, salary, salary_type, pay_schedule) 
    VALUES ('$firstname', '$lastname', '$email', $salary, '$salary_type', '$pay_schedule')  
";

if($db->query($sql) === TRUE) {
    redirect('../view_employees.php');
} else {
    echo "error: " .  $db->error;
}


?>