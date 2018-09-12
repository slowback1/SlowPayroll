<?php 
            include_once 'hours_suffix.php';
        include_once 'get_all_employees.php';
    //$day = int, 0 = monday, 1 = tuesday, etc.
    #also, I'm 99% sure this was a terrible mistake from the get-go.  4D Arrays?! Really?!
    function get_daily_hours($day) {

        $result = get_all_employees();
        $hours_arr = [['MoSt', 'MoEn'], ['TuSt', 'TuEn'], ['WeSt', 'WeEn'], ['ThSt', 'ThEn'], ['FrSt', 'FrEn'], ['SaSt', 'SaEn'], ['SuSt', 'SuEn']];
        $start = 'hours' . $hours_arr[$day][0];
        $end = 'hours' . $hours_arr[$day][1];
        //$res_arr = [];
        $res_str = "<div class='bodyRow'><div class='bodyRowItem'>Name</div><div class='bodyRowItem'>Start Time</div><div class='bodyRowItem'>End Time</div></div>";
        while($row = $result->fetch_assoc()) {
            $one_start = $row["$start"];
            $one_end = $row["$end"];
            if(($one_start !== null || !empty($one_start)) && ($one_end != null || !empty($one_end))) {
                $res_str = $res_str . "<div class='bodyRow'><div class='bodyRowItem'>" . $row['firstname'] . " " . $row['lastname'] . "</div><div class='bodyRowItem'>" . hours_suffix($one_start) . "</div><div class='bodyRowItem'>" . hours_suffix($one_end) . "</div></div>";
            }
        }
        
        
        
        /*
        while($row = $result->fetch_assoc()) {
            if($row[$hours_arr[$day[0]]] != null && $row[$hours_arr[$day[1]]] != null) {
                    if($row[$hours_arr[$day[0]]] < $row[$hours_arr[$day[1]]]) {
                        for($i = $row[$hours_arr[$day[0]]]; $i < 24; $i++) {
                            $res_arr[check_dow($i)].push($row['id']);   
                        }
                        for ($i = 0; $i < $row[$hours_arr[$day[1]]] + 1; $i++) {
                            $res_arr[check_dow($i + 1)].push($row['id']);
                        }
                    } else {
                        for($i = $row[$hours_arr[$day[0]]]; $i < $row[$hours_arr[$day[1]]] + 1; $i++) {
                            $res_arr[check_dow($i)].push($row['id']);
                        }
                    }
            }
            $res_str = "";
            foreach($res_arr as $hour) {
                $res_str = $res_str . "<div class='bodyRow'><div class='bodyRowItem'>$hour</div>";
            }
        }
        */
        return $res_str;
    }
    function check_dow($num) {
        if($num > 6) {
            return 0;
        }
        else {
            return $num;
        }
    }

?>