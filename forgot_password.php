<?php include 'templates/header.php'; ?>
<div class="body">
<form id="reset_password" action='actions/reset_password.php' method='post' accept-charset="UTF-8">
    <fieldset class='hourSet'>
        <p>Email:</p>
        <input type="text" name="username" id="username" maxlength="255" />
        <input type="submit" name="submit" value="submit" />
    </fieldset>
</form>
</div>
<?php include 'templates/mobile_quicklinks.php'?>
<?php include 'templates/footer.php'; ?>