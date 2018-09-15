<?php include 'templates/header.php' ?>
<?php if($isLoggedInEmployer) { ?>
    <?php include 'admin_index.php'; ?>
<?php } if($isLoggedInEmployee) { ?>
    <?php include 'employee_index.php'; ?>
<?php } if(!$isLoggedInEmployer && !$isLoggedInEmployee) { ?>

<div class="body">
    <h2>SlowPayroll</h2>
    <div class="bodyBox">
        <p><a href="employee_login.php">Employee Login</a></p>
    </div>
    <div class="bodyBox">
        <p> <a href="employer_login.php">Employer Login</a></p>
    </div>
</div>
<?php } ?>
<?php include 'templates/footer.php' ?>