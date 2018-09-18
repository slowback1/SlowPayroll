<?php include 'templates/header.php';?>
<?php include 'user_restrictions.php';?>

<?php
    $id = $_GET['id'];
    $type = $_GET['type'];
?>
<div class='body'>
    <?php
        if($_GET['ecode'] == 'badinfo') {
            echo "<div class='errorMsg'><p>Incorrect Email or Password</p></div>";
        }
    ?>
    <h2>Edit Inforomation</h2>
    <form method='post' name='edit_employee_form' action="actions/edit_employee.php">
        <input type="hidden" name="id" value="<?php echo $id;?>" />
        <fieldset class="hoursField">
            <p>First Name:</p>
            <input type="text" name="firstname" id="firstname" />
            <p>Last Name: </p>
            <input type="text" name="lastname" id="lastname" />
            <p>Email:</p>
            <input type="text" name="email" id="email" />
            <input type="submit" name="submit" value="submit" />
        </fieldset>
    </form>
</div>
<?php include 'templates/mobile_quicklinks.php' ?>
<?php include 'templates/footer.php';?>