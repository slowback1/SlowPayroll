<?php

    $sql = "SELECT id, firstname, lastname, salary from EmployeeInfo";
    $result = $db->query($sql);
        
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " .$row["firstname"] . " " . $row["lastname"] . " - Annual Salary: $" . $row["salary"] . "<br />";
        }
    } else { 
        echo "0 results";   
    }
    
?>