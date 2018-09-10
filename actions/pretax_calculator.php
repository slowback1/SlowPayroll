<?php
    include 'payday_calculator.php';
    
    function pretax_calculator($salary, $salary_type, $salary_schedule, $hours=40) {
        if($salary_type == "annual") {
            return round(payday_setter($salary, $salary_schedule), 2);
        }
        if($salary_type == "hourly") {
            return round(hourly_pay_calculator($salary, $salary_schedule, $hours), 2);
        }
    }
?>