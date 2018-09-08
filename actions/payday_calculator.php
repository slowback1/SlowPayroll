<?php


function payday_calculator($salary, $salary_type, $salary_schedule, $hours=40) {
        if($salary_type == 'annual') {
            return payday_setter($salary, $salary_schedule);
        }
        if($salary_type == "hourly") {
            return payday_setter(($salary * ($hours * 52)), $salary_schedule);
        }
    }
    function payday_setter($pay, $pay_schedule) {
        if($pay_schedule == "monthly") {
            return round($pay / 12, 2);
        } 
        if($pay_schedule == "bimonthly") {
            return round($pay / 24, 2);
        }
    } 
    
    ?>