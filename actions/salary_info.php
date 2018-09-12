<?php 
    include_once 'payday_due_date.php';
    include_once 'payday_calculator.php';
    function salary_info($salary, $salary_type, $pay_schedule, $benefit_plan, $hours, $firstname, $lastname, $email) {
        $name_str = "<div class='infoBoxItem'>$firstname $lastname </div>";
        $email_str = "<div class='infoBoxItem'> $email </div>";
        $salary_str = "<div class='infoBoxItem'>$salary</div>";
        $due_str = "<div class='infoBoxItem'>".payday_due_date($pay_schedule)."</div>";
        $benefit_str = "<div class='infoBoxItem'>". benefit_desc($benefit_plan) . "</div>";
        $payday_amount_str = "<div class='infoBoxItem'>". payday_calculator($salary, $salary_type, $pay_schedule, $hours) . "</div>";
        return "<div class='infoBox'><div class='infoBoxRow'><div class='infoBoxLabel'>Name:</div>$name_str</div><div class='infoBoxRow'><div class='infoBoxLabel'>Email:</div>$email_str</div><div class='infoBoxRow'><div class='infoBoxLabel'>Total Salary: </div>$salary_str </div><div class='infoBoxRow'><div class='infoBoxLabel'>Benefit Plan: </div> $benefit_str</div><div class='infoBoxRow'><div class='infoBoxLabel'>Post-Tax Payday Amount: </div> $payday_amount_str </div><div class='infoBoxRow'><div class='infoBoxLabel'>Next Payday: </div> $due_str </div></div>";
    }
    function benefit_desc($plan) {
        if($plan == 'full') {
            return 'Full Benefits.  Includes PTO, Health, Dental, and Life Insurance, 401k Matching, and more.';
        } elseif($plan == 'partial') {
            return 'Partial Benefits.  Includes PTO, Health Insurance, 401k Matching, and more.';
        } else {
            return 'Minimum Benefits.  Includes Social Security and Medicare';
        }
    }
?>