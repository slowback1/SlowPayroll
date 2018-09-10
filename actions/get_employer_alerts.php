<?php
    include 'db/connect.php';
    include 'get_total_hours.php';
    
    $qry = "SELECT * from employeeInfo";
    $result = $db->query($qry);
    
    if($result->num_rows > 0 ) {
        while($row = $result->fetch_assoc()) {
            if($row['hoursMoSt'] == null && $row['hoursMoEn'] == null && $row['hoursTuSt'] == null && $row['hoursTuEn'] == null && $row['hoursWeSt'] == null && $row['hoursWeEn'] == null && $row['hoursThSt'] == null && $row['hoursThEn'] == null && $row['hoursFrSt'] == null && $row['hooursFrEn'] == null && $row['hoursSaSt'] == null && $row['hoursSaEn'] == null && $row['hoursSuSt'] == null && $row['hoursSuEn'] == null) {
                $eid = $row['id'];
                $name = $row['firstname'] . " " . $row['lastname'];
                
                echo "<p>Employee $eid ($name) has no hours!  Give them hours <form method='post' name='edit_hours' action='../forms/edit_hours.php'><input type='hidden' name='id' value='". $eid . "'/><input type='submit' name='here' value='here' /></form></p>";
            }
            if(get_total_hours($row['hoursMoSt'] , $row['hoursMoEn'] , $row['hoursTuSt'] , $row['hoursTuEn'] , $row['hoursWeSt'] , $row['hoursWeEn'] , $row['hoursThSt'] , $row['hoursThEn'] , $row['hoursFrSt'] , $row['hooursFrEn'] , $row['hoursSaSt'] , $row['hoursSaEn'] , $row['hoursSuSt'] , $row['hoursSuEn']) > 40 && $row['salary_type'] == 'hourly') {
                $eid = $row['id'];
                $name = $row['firstname'] . ' ' . $row['lastname'];
                echo "<p>Employee $eid ($name) is an hourly employee who is working over 40 hours.  They will recieve increased overtime pay.  To change their schedule, click <form method='post' name='edit_hours' action='../forms/edit_hours.php'><input type='hidden' name='id' value='" . $eid . "'/><input type='submit' name='here' value='here' /></form></p>";
            }
        }
    } 
    

?>


