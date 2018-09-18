<?php include 'templates/header.php'; ?>
<?php 
include 'actions/get_one_employee.php';
include 'login/redirect.php';
$result = get_one_employee($_COOKIE['user']);
while($row = $result->fetch_assoc()) {
    $name = $row['firstname'] . ' ' . $row['lastname'];
    $email = $row['email'];
    $id = $row['id'];
}
?>
<div class="body">
    <h2> Settings for <?php echo $name; ?></h2>
    <form method='post' name='email_change' action=<?php echo"user_settings_form.php?id=$id&type=email" ?>>
        <input type='hidden' name='type' id='email' value='email' />
        <input type='hidden' name='id' id='id' value='<?php echo $id;?>' />
        <input type='submit' name='change email' id='email' value='change email' />
    </form>
    <form method='post' name='password_change' action=<?php echo"user_settings_form.php?id=$id&type=password"?>>
        <input type='hidden' name='type' id='password' value='password' />
        <input type='hidden' name='id' id='id' value='<?php echo $id;?>' />
        <input type='submit' name='change password' id='password_change' value='change password' />
    </form>
    <form method='post' name='edit_employee' action=<?php echo "user_settings_form.php?id=$id&type=firstname";?>>
        <input type='hidden' name='type' id='firstname' value='firstname' />
        <input type='hidden' name='id' id='id' value='<?php echo $id;?>' />
        <input type='submit' name='change email' id='change email' value='change first name' />
    </form>
    <form method='post' name='edit_lastname' action=<?php echo "user_settings_form.php?id=$id&type=lastname";?>>
        <input type="hidden" name="type" id="lastname" value="lastname" />
        <input type="hidden" name="id" id="id" value='<?php echo$id;?>' />
        <input type="submit" name="change email" id="change lastname" value="change last name" />
    </form>
</div>
<?php include 'templates/mobile_quicklinks.php'?>
<?php include 'templates/footer.php'; ?>