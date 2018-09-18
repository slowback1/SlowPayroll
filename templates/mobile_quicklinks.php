<?php if($isLoggedInEmployee || $isLoggedInEmployer):?>
    <div class="mobileQuickLinks">
        <h2>Quick Links</h2>
    <?php if($isLoggedInEmployee): ?>
        <a href="index.php">Home</a>
        <a href="user_settings.php">Settings</a>
    <?php elseif($isLoggedInEmployer): ?>
        <a href="index.php">Home</a>    
        <a href="view_employees.php">Employee Overview</a>
        <a href="add_employee.php">Add Employee</a>
        <a href="payroll_overview.php">Payroll Overview</a>
        <a href="hours_overview.php">Hours Overview</a>
    <?php endif; ?>
    </div>
<?php endif; ?>