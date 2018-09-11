<?php

    include 'pretax_calculator.php';
    include 'get_total_hours.php';
    include 'benefits_calculator.php';
    
    function payroll_employee_view($id, $firstname, $lastname, $salary, $salary_type, $salary_schedule, $hours, $benefits_plan) {
        return "<div class='bodyRow'><div class='bodyRowItem'>" . $id . "</div><div class='bodyRowItem'> " . $firstname . " " . $lastname . "</div><div class='bodyRowItem'> $" . pretax_calculator($salary, $salary_type, $salary_schedule, $hours) . "</div><div class='bodyRowItem'> $" . (pretax_calculator($salary, $salary_type, $salary_schedule, $hours) - payday_calculator($salary, $salary_type, $salary_schedule, $hours)) . "</div><div class='bodyRowItem'> $" . payday_calculator($salary, $salary_type, $salary_schedule, $hours) . "</div><div class='bodyRowItem'> $" . benefits_calculator($benefits_plan, $salary_type, $hours, $salary_schedule) . "</div></div>";
    }
    function get_payroll($schedule) {
        include 'get_all_employees.php';
        $result = get_all_employees();
        if($result->num_rows > 0) {
            if(date("d") > 15 || $schedule == "first") {
                echo $row['salary'];
                $total = 0;
                $detailPiece = "";
                while($row = $result->fetch_assoc()) {
                    $hoursMoSt = $row['hoursMoSt'];
                    $hoursMoEn = $row['hoursMoEn'];
                    $hoursTuSt = $row['hoursTuSt'];
                    $hoursTuEn = $row['hoursTuEn'];
                    $hoursWeSt = $row['hoursWeSt'];
                    $hoursWeEn = $row['hoursWeEn'];
                    $hoursThSt = $row['hoursThSt'];
                    $hoursThEn = $row['hoursThEn'];
                    $hoursFrSt = $row['hoursFrSt'];
                    $hoursFrEn = $row['hoursFrEn'];
                    $hoursSaSt = $row['hoursSaSt'];
                    $hoursSaEn = $row['hoursSaEn'];
                    $hoursSuSt = $row['hoursSuSt'];
                    $hoursSuEn = $row['hoursSuEn'];
                    $total += pretax_calculator($row['salary'], $row['salary_type'], $row['pay_schedule'], get_total_hours($hoursMoSt, $hoursMoEn, $hoursTuSt, $hoursTuEn, $hoursWeSt, $hoursWeEn, $hoursThSt, $hoursThEn, $hoursFrSt, $hoursFrEn, $hoursSaSt, $hoursSaEn, $hoursSuSt, $hoursSuEn));
                    $detailPiece = $detailPiece . payroll_employee_view($row['id'], $row['firstname'], $row['lastname'], $row['salary'], $row['salary_type'], $row['pay_schedule'], get_total_hours($hoursMoSt, $hoursMoEn, $hoursTuSt, $hoursTuEn, $hoursWeSt, $hoursWeEn, $hoursThSt, $hoursThEn, $hoursFrSt, $hoursFrEn, $hoursSaSt, $hoursSaEn, $hoursSuSt, $hoursSuEn), $row['benefits_plan']);
                }
            } else {
                $total = 0;
                $detailPiece = "";
                while($row = $result->fetch_assoc()) {
                    if($row['pay_schedule'] == 'bimonthly') {
                        $hoursMoSt = $row['hoursMoSt'];
                        $hoursMoEn = $row['hoursMoEn'];
                        $hoursTuSt = $row['hoursTuSt'];
                        $hoursTuEn = $row['hoursTuEn'];
                        $hoursWeSt = $row['hoursWeSt'];
                        $hoursWeEn = $row['hoursWeEn'];
                        $hoursThSt = $row['hoursThSt'];
                        $hoursThEn = $row['hoursThEn'];
                        $hoursFrSt = $row['hoursFrSt'];
                        $hoursFrEn = $row['hoursFrEn'];
                        $hoursSaSt = $row['hoursSaSt'];
                        $hoursSaEn = $row['hoursSaEn'];
                        $hoursSuSt = $row['hoursSuSt'];
                        $hoursSuEn = $row['hoursSuEn'];
                        $total += pretax_calculator($row['salary'], $row['salary_type'], $row['pay_schedule'], get_total_hours($hoursMoSt, $hoursMoEn, $hoursTuSt, $hoursTuEn, $hoursWeSt, $hoursWeEn, $hoursThSt, $hoursThEn, $hoursFrSt, $hoursFrEn, $hoursSaSt, $hoursSaEn, $hoursSuSt, $hoursSuEn));
                        $detailPiece = $detailPiece . payroll_employee_view($row['id'], $row['firstname'], $row['lastname'], $row['salary'], $row['salary_type'], $row['pay_schedule'], get_total_hours($hoursMoSt, $hoursMoEn, $hoursTuSt, $hoursTuEn, $hoursWeSt, $hoursWeEn, $hoursThSt, $hoursThEn, $hoursFrSt, $hoursFrEn, $hoursSaSt, $hoursSaEn, $hoursSuSt, $hoursSuEn), $row['benefit_plan']);
                    }
            }
        }

        return "$total </div><div class=bodyBox><h2>Details:</h2><div class='bodyRow'><div class='bodyRowItem'>ID</div><div class='bodyRowItem'>Name</div><div class='bodyRowItem'>Amount</div><div class='bodyRowItem'>Amount Taxed</div><div class='bodyRowItem'>Post-Tax Amount </div><div class='bodyRowItem'>Est. Benefits Cost </div></div>". $detailPiece . "</div>";
    } else {
        echo "something went wrong " . $db->error;
    }
    }
    

?>