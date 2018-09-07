<?php 
    include 'templates/header.php';
    include 'admin_restrictions.php';
?>

<div class="body">
    <h2>Add Employee</h2>
    <form id="add_employee" action="actions/add_employee.php" method="post" accept-charset="UTF-8">
        <fieldset>
            <input type="hidden" name="submitted" id="submitted" value="1"  />
            <p>Name:</p>
            <label for="firstname">First: </label><input type="text" name="firstname" id="firstname" maxlength="255" required /><br />
            <label for="lastname">Last</label><input type="text" name="lastname" id="lastname" maxlength="255" required/>
    <br />
            <label for="email">Email</label><input type="text" name="email" id="email" maxlength="255" required/>
            <br />
            <label for="salary">Starting Salary</label><input type="number" id="salary" name="salary" required /> <br/>
            <label for="salary_type">Salary Type</label><br /><input type="radio" name="salary_type" id="salary_type" value="annual" required>Annual <br /> <input type="radio" name="salary_type" id="salary_type" value="hourly" required>Hourly <br/>
            <label for="pay_schedule">Pay Schedule</label><br /><input type="radio" name="pay_schedule" id="pay_schedule" value="monthly" required>Monthly <br />
            <input type="radio" name="pay_schedule" id="pay_schedule" value="bimonthly" required>Bimonthly <br />
            <input type="submit" value="submit" name="submit" />
        </fieldset>
    </form>
</div>


<?php include 'templates/footer.php' ?>