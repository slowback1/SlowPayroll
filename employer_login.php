<?php include 'templates/header.php'; ?>
<?php include 'actions/check_login.php'; ?>
<div class="body">
    <?php
        if($_GET['ecode'] == 'badinfo') {
            echo "<div class='errorMsg'><p>Incorrect Email or Password</p></div>";
        }
        if($_GET['ecode'] == 'forgotpassword') {
            echo "<div class='errorMsg'><p>Password reset to default.  You should know what it is.</p></div>";
        }
    ?>
    <h2> Employer Login </h2>
    <form id="login" action='login/login_a.php' method="post" accept-charset="UTF-8">
        <fieldset class="login">
            
            <input type="hidden" name="submitted" id="submitted" value="1" />
            <p for="username">Email: </p>
            <input type="text" name="username" id="username" maxlength="255" />
            <p for="password"> Password: </p>
            <input type="password" name="password" id="password" maxlength="255" />
            <input type="submit" name="Submit" value="Submit" />
        </fieldset>
    </form>
    <a href="admin_password_reset.php">Forgot Password?</a>
</div>
<?php include 'templates/mobile_quicklinks.php' ?>
<?php include 'templates/footer.php'; ?>