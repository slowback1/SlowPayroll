<?php 
    include 'templates/header.php';
    include 'admin_restrictions.php';
?>

<div class="body">
    <h2>Add Employee</h2>
    <form id="add_employee" action="actions/add_employee.php" method="post" accept-charset="UTF-8">
        <fieldset>
            <input type="hidden" name="submitted" id="submitted" value="1"  />
            <div><h3>Name:</h3>
            <p for="firstname">First: </p><input type="text" name="firstname" id="firstname" maxlength="255" required />
            <p for="lastname">Last:</p><input type="text" name="lastname" id="lastname" maxlength="255" required/>
    
            <p for="email">Email:</p><input type="text" name="email" id="email" maxlength="255" required/>
            
            </div>
            <div>
            <h3>Salary: </h3>
            <p for="salary">Starting Salary:</p><input type="number" id="salary" name="salary" required /> 
            <p for="salary_type">Salary Type:</p><input type="radio" name="salary_type" id="salary_type" value="annual" required>Annual</input>  <input type="radio" name="salary_type" id="salary_type" value="hourly" required>Hourly</input> 
            <p for="pay_schedule">Pay Schedule:</p><input type="radio" name="pay_schedule" id="pay_schedule" value="monthly" required>Monthly </input>
            <input type="radio" name="pay_schedule" id="pay_schedule" value="bimonthly" required>Bimonthly</input> 
</div>
        </fieldset>
                    <input type="submit" value="submit" name="submit" />
    </form>
</div>


<?php include 'templates/footer.php' ?>