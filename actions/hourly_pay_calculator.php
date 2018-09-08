<?php
  include 'overtime_calculator.php';
  include 'get_total_hours.php';
  $total_hours_weekly = get_total_hours($hoursMoSt, $hoursMoEn, $hoursTuSt, $hoursTuEn, $hoursWeSt, $hoursWeEn, $hoursThSt, $hoursThEn, $hoursFrSt, $hoursFrEn, $hoursSaSt, $hoursSaEn, $hoursSuSt, $hoursSuEn);
  if($pay_schedule == "monthly") {
      echo "$" . (overtime_calculator($salary, $total_hours_weekly) * 4);
  } else {
      echo "$" . (overtime_calculator($salary, $total_hours_weekly) * 2);
  }
  
?>