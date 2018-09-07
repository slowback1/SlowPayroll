<?php 
    function employee_view($id, $firstname, $lastname, $salary) {
        echo "<div class='bodyRow'><div class='bodyRowItemFirst'>" . "<form id='delete_employee' action='actions/delete_employee.php' method='post'><input type='hidden' name='id' value='".$id."'/><input type='submit' name='delete' value='delete' /></form>" . "</div><div class='bodyRowItem'>".$id."</div><div class='bodyRowItem'>".$firstname . " " . $lastname . "</div><div class='bodyRowItemLast'>".$salary."</div></div>";
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
    </div>
    <div class='bodyRowItem'>
        ".$id."
    </div>
    <div class='bodyRowItem'>
        ".$firstname . " " . $lastname . "
    </div><div class='bodyRowItemLast'>
        ".$salary."
    </div>
</div>

-->