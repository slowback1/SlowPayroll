<?php include 'templates/header.php'; ?>
<?php include 'admin_restrictions.php'; ?>

<div class="body">
    <h2>Edit <?php echo $_GET['name'];?>'s Information</h2>
    <form id="editEmployee" method="post" action="actions/edit_employee.php">
        <input type="hidden" name="id" value="<?php echo $_POST['id']?>" />
        <fieldset class="hoursField">
            <p>First Name:</p>
            <input type="text" name="firstname" id="firstname" />
            <p>Last Name:</p>
            <input type="text" name="lastname" id="lastname" />
            <p>Email:</p>
            <input type="text" name="email" id="email" />
            <p>Salary:</p>
            <input type="number" name="salary" id="salary" />
            <p>Salary Type:</p>
            Annual <input type="radio" name="salary_type" id="salary_type" value="annual" />
            Hourly <input type="radio" name="salary_type" id="salary_type" value="hourly" />
            <p>Pay Schedule</p>
            Monthly <input type="radio" name="pay_schedule" id="pay_schedule" value="monthly" />
            Bimonthly <input type="radio" name="pay_schedule" id="pay_schedule" value="bimonthly" />
            <p> Benefit Plan </p>
            Full <input type="radio" name="benefit_plan" id="benefit_plan" value="full" />
            Partial <input type="radio" name="benefit_plan" id="benefit_plan" value="partial" />
            Minimum <input type="radio" name="benefit_plan" id="benefit_plan" value="minimum" />
            <input type="submit" name="submit" value="submit" />
        </fieldset>
    </form>
    <a href="edit_hours.php">Edit Hours</a>
</div>

<?php include 'templates/footer.php'; ?>