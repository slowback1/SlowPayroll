<?php 

include 'db/connect.php'; 

$user = $_COOKIE['user'];
$qry = "select * from employeeInfo where id=$user";
$result = $db->query($qry);
if($result->num_rows > 0 ) {
    while($row = $result -> fetch_assoc()) {
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $join_date = $row['join_date'];
        $salary = $row['salary'];
        $salary_type = $row['salary_type'];
        $bonuses = $row['bonuses'];
        $pay_schedule = $row['pay_schedule'];
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
        echo $row[''];
    }
} else {
    echo "something went wrong";
}
    

?>