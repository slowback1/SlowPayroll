<?php 

    
    function payroll_employee_view($id, $firstname, $lastname, $salary, $salary_type, $salary_schedule, $hours) {
        echo "<div class='bodyRow'><div class='bodyRowItem'>" . $id . "</div><div class='bodyRowItem'>" . $firstname . " " . $lastname . "</div><div class='bodyRowItem'>" . pretax_calculator($salary, $salary_type, $pay_schedule, $hours) . "</div></div>";
    }
$query = "SELECT * FROM employeeInfo";
$res = $db->query($qry);
if($res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {
        if($row['pay_schedule'] == 'bimonthly' || date('d') >= 15 ) {
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
            echo payroll_employee_view($row['id'], $row['firstname'], $row['lastname'], $row['salary'], $row['salary_type'], $row['salary_schedule'], get_total_hours($hoursMoSt, $hoursMoEn, $hoursTuSt, $hoursTuEn, $hoursWeSt, $hoursWeEn, $hoursThSt, $hoursThEn, $hoursFrSt, $hoursFrEn, $hoursSaSt, $hoursSaEn, $hoursSuSt, $hoursSuEn));
        }
    }
}

?>
<!-- neater version of above
<div class='bodyRow'>
    <div class='bodyRowItem'>" . $id . "</div>
    <div class='bodyRowItem'>" . $firstname . " " . $lastname . "</div>
    <div class='bodyRowItem'>" . pretax_calculator($row['salary'], $row['salary_type'], $row['pay_schedule'], get_total_hours($hoursMoSt, $hoursMoEn, $hoursTuSt, $hoursTuEn, $hoursWeSt, $hoursWeEn, $hoursThSt, $hoursThEn, $hoursFrSt, $hoursFrEn, $hoursSaSt, $hoursSaEn, $hoursSuSt, $hoursSuEn) . "</div>
</div> -->