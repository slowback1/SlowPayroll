<?php 
    include '../db/connect.php';
    include '../login/test_input.php';
    
    $id = test_input($_POST['id']);
    $firstname = test_input($_POST['firstname']);
    $lastname = test_input($_POST['lastname']);
    $email = test_input($_POST['email']);
    $salary = test_input($_POST['salary']);
    $salary_type = test_input($_POST['salary_type']);
    $pay_schedule = test_input($_POST['pay_schedule']);
    $benefit_plan = test_input($_POST['benefit_plan']);
    
    
    function checkIfEmpty($item) {
        if($item == undefined || $item == null || $item == "" || empty($item)) {
            return true;
        } else {
            return false;
        }
    }

    $qry_firstname = (!checkIfEmpty($firstname) ? "firstname='$firstname'" : "");
    $qry_lastname = (!checkIfEmpty($lastname) ? "lastname='$lastname'" : "");
    $qry_email = (!checkIfEmpty($email) ? "email='$email'" : "");
    $qry_salary = (!checkIfEmpty($salary) ? "salary='$salary'" : "");
    $qry_salary_type = (!checkIfEmpty($salary_type) ? "salary_type='$salary_type'" : "");
    $qry_pay_schedule = (!checkIfEmpty($pay_schedule) ? "pay_schedule='$pay_schedule'" : "");
    $qry_benefit_plan = (!checkIfEmpty($benefit_plan) ? "benefit_plan='$benefit_plan'" : "");
    $settings_arr = [$qry_firstname, $qry_lastname, $qry_email, $qry_salary, $qry_salary_type, $qry_pay_schedule, $qry_benefit_plan];
    $last = 0;
    $res = "";
    foreach($settings_arr as $key=>$value) {
        if(checkIfEmpty($value)) {
            //do nothing
        } else {
            $last = $key;
        }
    }
    foreach($settings_arr as $key=>$value) {
        if(checkIfEmpty($value)) {
            $res = $res;
        } else {
            if($key != $last) {
                $res = $res .  $value . ", ";
            } else {
                $res = $res . $value;
            }
        }
    }
    
    $qry = "UPDATE employeeInfo SET $res WHERE id=$id";
    if ($db->query($qry) == TRUE) {
        include '../login/redirect.php';
        redirect('../view_employees.php?update=true');
    } else {
        echo $qry . "<br />";
        echo $db->error;
    }
    
?>