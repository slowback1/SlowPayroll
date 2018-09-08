<?php 
        include 'hours_calculator.php';
    function get_total_hours($hoursMoSt, $hoursMoEn, $hoursTuSt, $hoursTuEn, $hoursWeSt, $hoursWeEn, $hoursThSt, $hoursThEn, $hoursFrSt, $hoursFrEn, $hoursSaSt, $hoursSaEn, $hoursSuSt, $hoursSuEn) {

        return hours_calculator($hoursMoSt, $hoursMoEn) + hours_calculator($hoursTuSt, $hoursTuEn) + hours_calculator($hoursWeSt, $hoursWeEn) + hours_calculator($hoursThSt, $hoursThEn) + hours_calculator($hoursFrSt, $hoursFrEn) + hours_calculator($hoursSaSt, $hoursSaEn) + hours_calculator($hoursSuSt, $hoursSuEn);
    }
?>