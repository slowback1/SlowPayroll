<?php

    include 'get_total_hours.php';
    include 'get_all_employees.php';
    $result = get_all_employees();
    
    if($result->num_rows > 0 ) {
        while($row = $result->fetch_assoc()) {
            if($row['hoursMoSt'] == null && $row['hoursMoEn'] == null && $row['hoursTuSt'] == null && $row['hoursTuEn'] == null && $row['hoursWeSt'] == null && $row['hoursWeEn'] == null && $row['hoursThSt'] == null && $row['hoursThEn'] == null && $row['hoursFrSt'] == null && $row['hooursFrEn'] == null && $row['hoursSaSt'] == null && $row['hoursSaEn'] == null && $row['hoursSuSt'] == null && $row['hoursSuEn'] == null) {
                $eid = $row['id'];
                $name = $row['firstname'] . " " . $row['lastname'];
                
                echo "<div class='employerAlert'><p>Employee $eid ($name) has no hours!  Give them hours <form method='post' name='edit_hours' action='../edit_hours.php'><input type='hidden' name='id' value='". $eid . "'/><input type='submit' name='here' value='here' /></form></p></div>";
            }
            if(get_total_hours($row['hoursMoSt'] , $row['hoursMoEn'] , $row['hoursTuSt'] , $row['hoursTuEn'] , $row['hoursWeSt'] , $row['hoursWeEn'] , $row['hoursThSt'] , $row['hoursThEn'] , $row['hoursFrSt'] , $row['hooursFrEn'] , $row['hoursSaSt'] , $row['hoursSaEn'] , $row['hoursSuSt'] , $row['hoursSuEn']) > 40 && $row['salary_type'] == 'hourly') {
                $eid = $row['id'];
                $name = $row['firstname'] . ' ' . $row['lastname'];
                echo "<div class='employerAlert'><p>Employee $eid ($name) is an hourly employee who is working over 40 hours.  They will recieve increased overtime pay.  To change their schedule, click <form method='post' name='edit_hours' action='../edit_hours.php'><input type='hidden' name='id' value='" . $eid . "'/><input type='submit' name='here' value='here' /></form></p></div>";
            }
            if($row['benefit_plan'] === null) {
                $eid = $row['id'];
                $name = $row['firstname'] . " " . $row['lastname'];
                echo "<div class='employerAlert'><p> Employee $eid ($name) has no benefit plan! set one <form method='post' name='edit_benefits' action='../edit_benefits.php'><input type='hidden' name='id' value='".$eid."'/><input type='submit' name='here' value='here' /></form></p></div>";
            }
        }
    } 
    

?>


