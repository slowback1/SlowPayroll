<?php
    include 'hours_suffix.php';
    function get_hours($start, $end, $day) {
        if($start == null && $end == null) {
            return "<tr><td>$day</td><td>You Have</td><td>The Day Off</td></tr>";
        } else {
            return "<tr><td>$day</td><td>". hours_suffix($start) . "</td><td>". hours_suffix($end) . "</td></tr>";
        }
    }
?>