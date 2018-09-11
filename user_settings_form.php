<?php 
    $id = $_POST['id'];
    $type = $_POST['type'];
?>

<?php include 'templates/header.php';?>

<div class='body'>
    <h2>Form for changing <?php echo $type; ?></h2>
    <form method='post' name='change_form' action='actions/change_<?php echo $type;?>.php'>
        <input type="hidden" name="id" value='<?php echo $id;?>' />
        <label>Enter Old Email and Password: </label><br />
        Email: <input type="text" name="email_old" maxlength="255" required /> <br />
        Password: <input type="password" name="password_old" maxlength="255" required /> <br />
        <br />
        <label>Enter New <?php echo $type;?></label>
        <input type="<?php echo ($type=='email' ? 'text' : 'password')?>" name="<?php echo $type?>" maxlength="255" required />
        <br />
        <label>Re-Enter <?php echo $type;?></label>
        <input type="<?php echo ($type=='email' ? 'text' : 'password') ?>" name="<?php echo $type?>_two" maxlength="255" required />
    </form>
</div>

<?php include 'templates/footer.php'; ?>