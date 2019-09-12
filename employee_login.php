<?php include 'templates/header.php'; ?>
<?php include 'actions/check_login.php'; ?>
<div class="body">
    <?php 
        if($_GET['ecode'] == 'badinfo') {
            echo "<div class='errorMsg'><p>Incorrect email or password</p></div>";
        } elseif($_GET['newpassword'] == 'set') {
            echo "<div class='errorMsg'><p>Temporary Password '1234' set</p></div>";
        }
    ?>
    <h2> Employee Login </h2>
    <form id="login" action='login/login_u.php' method="post" accept-charset="UTF-8">
        <fieldset class="login">
            <input type="hidden" name="submitted" id="submitted" value="1" />
            <p for="username">Email: </p>
            <input type="text" name="username" id="username" maxlength="255" />
           <input type="submit" name="Submit" value="Submit" />
        </fieldset>
    </form>
    <a href="forgot_password.php">Forgot Password?</a>
</div>
<?php include 'templates/mobile_quicklinks.php'?>
<?php include 'templates/footer.php'; ?>