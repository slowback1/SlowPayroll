<?php
include 'tax_calculator.php';
include 'hourly_pay_calculator.php';

function payday_calculator($salary, $salary_type, $salary_schedule, $hours=40) {
        if($salary_type == 'annual') {
            return round(tax_calculator(payday_setter($salary, $salary_schedule), $salary_schedule), 2);
        }
        if($salary_type == "hourly") {
            return round(tax_calculator(hourly_pay_calculator($salary, $salary_schedule, $hours), $salary_schedule), 2);
        }
    }
    function payday_setter($pay, $pay_schedule) {
        if($pay_schedule == "monthly") {
            return ($pay / 12);
        } 
        if($pay_schedule == "bimonthly") {
            return ($pay / 24);
        }
    } 
    
    ?>