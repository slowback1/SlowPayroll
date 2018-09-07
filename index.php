<?php include 'templates/header.php' ?>
<?php if($isLoggedInEmployer) { ?>
    <h1> Hi Admin! </h1>
<?php } else { ?>

<div class="body">
    <h2>SlowPayroll</h2>
    <div class="bodyBox">
        <h3>Employee?</h3>
        <p><a href=""> Log In here.</a></p>
    </div>
    <div class="bodyBox">
        <h3>Employer?</h3>
        <p> <a href="employer_login.php"> Log In here.</a></p>
    </div>
</div>
<?php } ?>
<?php include 'templates/footer.php' ?>