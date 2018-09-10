<?php

    include 'pretax_calculator.php';
    include 'get_total_hours.php';
    function get_payroll($schedule) {
            include 'db/connect.php';
        $qry = "SELECT * from employeeInfo";
        $result = $db->query($qry);
        if($result->num_rows > 0) {
            if(date("d") > 15 || $schedule == "first") {
                echo $row['salary'];
                $total = 0;
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
                }
            } else {
                $total = 0;
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

                    }
            }
        }

        return $total;
    } else {
        echo "something went wrong " . $db->error;
    }
    }

?>