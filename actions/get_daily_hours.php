<?php 
            include_once 'hours_suffix.php';
        include_once 'get_all_employees.php';
    //$day = int, 0 = monday, 1 = tuesday, etc.
    function get_daily_hours($day) {

        $result = get_all_employees();
        $hours_arr = [['MoSt', 'MoEn'], ['TuSt', 'TuEn'], ['WeSt', 'WeEn'], ['ThSt', 'ThEn'], ['FrSt', 'FrEn'], ['SaSt', 'SaEn'], ['SuSt', 'SuEn']];
        $start = 'hours' . $hours_arr[$day][0];
        $end = 'hours' . $hours_arr[$day][1];
        $res_str = "<div class='bodyRow'><div class='bodyRowItem'>Name</div><div class='bodyRowItem'>Start Time</div><div class='bodyRowItem'>End Time</div></div>";
        while($row = $result->fetch_assoc()) {
            $one_start = $row["$start"];
            $one_end = $row["$end"];
            if(!empty($one_start) && !empty($one_end)) {
                $res_str = $res_str . "<div class='bodyRow'><div class='bodyRowItem'>" . $row['firstname'] . " " . $row['lastname'] . "</div><div class='bodyRowItem'>" . hours_suffix($one_start) . "</div><div class='bodyRowItem'>" . hours_suffix($one_end) . "</div></div>";
            }
        }
        return $res_str;
    }

?>