<?php 
    include 'actions/payday_due_date.php';
    include 'actions/payday_calculator.php';

    
    function employee_view($id, $firstname, $lastname, $salary, $salary_type, $salary_schedule) {
        echo "<div class='bodyRow'><div class='bodyRowItemFirst'>" . "<form id='delete_employee' action='actions/delete_employee.php' method='post'><input type='hidden' name='id' value='".$id."'/><input type='submit' name='delete' value='delete' /></form>" . "<form id='edit_hours' action='forms/edit_hours.php' method='post'><input type='hidden' name='id' value='".$id."'/><input type='submit' name='hours' value='hours' /></form></div><div class='bodyRowItem'>".$id."</div><div class='bodyRowItem'>".$firstname . " " . $lastname . "</div><div class='bodyRowItem'> $". $salary ."". salary_suffix($salary_type) . "</div><div class='bodyRowItemLast'>". payday_due_date($salary_schedule) ."</div></div>";
    }
    //function week_calculator($ms, $me, $ts, $te, $ws, $we, $hs, $he, $fs, $fe, $as, $ae, $us, $ue) {
      //  return (hours_calculator($ms, $me) + hours_calculator($ts, $te) + hours_calculator($ws, $we) + hours_calculator($hs, $he) + hours_calculator($fs, $fe) + hours_calculator($as, $ae) + hours_calculator($us, $ue));
    //}
    function salary_suffix($salary_type) {
        if($salary_type === "annual") {
            return "/year";
        } else {
            return "/hour";
        }
    }
    

?>
<!-- neater version of the above

<div class='bodyRow'>
    <div class='bodyRowItemFirst'>" . "
        <form id='delete_employee' action='actions/delete_employee.php' method='post'>
            <input type='hidden' name='id' value='".$id."'/>
            <input type='submit' name='delete' value='delete' />
        </form>
        " . "
        <form id='edit_hours' action='forms/edit_hours.php' method='post'>
            <input type='hidden' name='id' value='".$id."'/>
            <input type='submit' name='edit hours' value='edit hours' />
        </form>
    </div>
    <div class='bodyRowItem'>
        ".$id."
    </div>
    <div class='bodyRowItem'>
        ".$firstname . " " . $lastname . "
    </div>
    <div class='bodyRowItem'>
        ".'payday_calculator($salary, $salary_type, $salary_schedule)'."
    </div>
    <div class="bodyRowItemLast">". payday_due_date($salary_schedule) ."</div>
</div>

-->