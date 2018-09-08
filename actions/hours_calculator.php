<?php 
    function hours_calculator($start, $end) {
        if ($start == null || $end == null) {
            return 0;
        }
        return abs($end - $start);
    }
?>