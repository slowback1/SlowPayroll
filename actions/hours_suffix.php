<?php
    function hours_suffix($time) {
        if ($time > 12 ) {
            $ntime = $time - 12;
            return "$ntime:00 P.M.";
        } elseif($time == 12) {
            return "12:00 P.M.";
        } else {
            return "$time:00 A.M.";
        }
    }
?>