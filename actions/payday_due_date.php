<?php
        function payday_due_date($pay_schedule) {
        if(date("d") > 15 || $pay_schedule == "monthly") {
            return "" . date("m") + 1 . "/01/" . date("y");
        } else {
            return "" . date("m") . "/15/" . date("y");
        }
    }
?>