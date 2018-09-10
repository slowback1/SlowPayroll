<?php 
    function hours_calculator($start, $end) {
        if ($start == null || $end == null) {
            return 0;
        }
        if ($start < $end) {
            return abs($end - $start);
        }
        if ($end < $start) {
            return 24 - abs($end - $start);
        }
    }
?>