<?php 
 
include 'actions/get_employee.php';    
include 'actions/get_hours.php';
                        include 'actions/get_total_hours.php';

?>
    <div class="body">
        <h2> Welcome <?php echo $firstname; ?> </h2>
        <div class="bodyBoxTop">
            <h3>Quick Links:</h3>
            <a href="user_settings.php">Settings</a>
        </div>
        <div class="bodyBox">
            <div class="bodyBoxLeft">
                <h3>Hours:</h3>
                <table>
                    <tr>
                        <td>Day</td>
                        <td>Start Time</td>
                        <td>End Time</td>
                    </tr>
                    <?php 
                        echo "" . get_hours($hoursMoSt, $hoursMoEn, "Monday");
                        echo "" . get_hours($hoursTuSt, $hoursTuEn, "Tuesday");
                        echo "" . get_hours($hoursWeSt, $hoursWeEn, "Wednesday");
                        echo "" . get_hours($hoursThSt, $hoursThEn, "Thursday");
                        echo "" . get_hours($hoursFrSt, $hoursFrEn, "Friday");
                        echo "" . get_hours($hoursSaSt, $hoursSaEn, "Saturday");
                        echo "" . get_hours($hoursSuSt, $hoursSuEn, "Sunday");
                    ?>
                </table>
            </div>
            <div class="bodyBoxRight">
                <h3>Next payday is on:</h3>
                <h4><?php include 'actions/payday_due_date.php';
                echo payday_due_date($pay_schedule);
                ?></h4>
                <h3>Post-Tax Paycheck:</h5>
                <h4><?php include 'actions/payday_calculator.php';
                
                    if($salary_type == 'annual') {
                        echo "$". payday_calculator($salary, $salary_type, $pay_schedule);
                    } else {
                        echo "$" . payday_calculator($salary, $salary_type, $pay_schedule, get_total_hours($hoursMoSt, $hoursMoEn, $hoursTuSt, $hoursTuEn, $hoursWeSt, $hoursWeEn, $hoursThSt, $hoursThEn, $hoursFrSt, $hoursFrEn, $hoursSaSt, $hoursSaEn, $hoursSuSt, $hoursSuEn));
                    }
                ?></h5>
            </div>
        </div>
    </div>

