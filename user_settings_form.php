<?php 
    $id = $_GET['id'];
    $type = $_GET['type'];
?>

<?php include 'templates/header.php';?>
<?php include 'user_restrictions.php';?>
<div class='body'>
    <?php
        if($_GET['ecode'] == 'badinfo') {
            echo "<div class='errorMsg'><p>Incorrect Email or Password</p></div>";
        }
    ?>
    <h2>Form for changing <?php echo $type; ?></h2>
    <form method='post' name='change_form' action='actions/change_<?php echo $type;?>.php'>
        <input type="hidden" name="id" value='<?php echo $id;?>' />
            <fieldset class="hoursField">
       <p>Old Email:</p> <input type="text" name="email_old" maxlength="255" required /> 
        <p>Old Password:</p><input type="password" name="password_old" maxlength="255" required /> 
        
        <p> New <?php echo $type;?></p>
        <input type="<?php echo ($type=='email' ? 'text' : 'password')?>" name="<?php echo $type?>" maxlength="255" required />
        
        <p>Re-Enter New <?php echo $type;?></p>
        <input type="<?php echo ($type=='email' ? 'text' : 'password') ?>" name="<?php echo $type?>_two" maxlength="255" required />
        <input type="submit" name="submit" value="submit" />
        </fieldset>
    </form>
</div>
<?php include 'templates/mobile_quicklinks.php'?>
<?php include 'templates/footer.php'; ?>