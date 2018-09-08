<?php
  include 'hours_calculator.php';
  
  $total_hours_weekly = hours_calculator($hoursMoSt, $hoursMoEn) + hours_calculator($hoursTuSt, $hoursTuEn) + hours_calculator($hoursWeSt, $hoursWeEn) + hours_calculator($hoursThSt, $hoursThEn) + hours_calculator($hoursFrSt, $hoursFrEn) + hours_calculator($hoursSaSt, $hoursSaEn) + hours_calculator($hoursSuSt, $hoursSuEn);
  if($pay_schedule == "monthly") {
      echo "$" . ($total_hours_weekly * $salary * 4);
  } else {
      echo "$" . ($total_hours_weekly * $salary * 2);
  }
?>