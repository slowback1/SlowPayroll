<?php
    function get_hours($start, $end, $day) {
        if($start == null && $end == null) {
            return "<tr><td>$day</td><td>You Have</td><td>The Day Off</td></tr>";
        } else {
            return "<tr><td>$day</td><td>$start:00</td><td>$end:00</td></tr>";
        }
    }
?>