<?php
    function overtime_calculator($pay, $hours) {
        if ($hours > 40) {
            return ($pay * 40) + ($pay * ($hours - 40) * 1.5); 
        } else {
            return $pay * $hours;
        }
    }
?>