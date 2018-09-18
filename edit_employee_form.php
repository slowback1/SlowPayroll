<?php include 'templates/header.php' ?>
<?php include 'admin_restrictions.php' ?>

<div class="body">
    <form id="edit employee" method="post" action="actions/edit_employee.php">
        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>" />
        <input type="hidden" name="type" value"<?php echo $_GET['type']; ?>" />
        <fieldset class="hoursField">
            <input type="text" name="<?php echo $_GET['type'];?>" id="<?php echo $_GET['type'];?>" />
            <input type="text" name="<?php echo $_GET['type'] . '_two';?>" id="<?php echo $_GET['type'] . '_type';?>" />
            <input type="submit" name="submit" value="submit" />
        </fieldset>
    </form>
</div>
<?php include 'templates/mobile_quicklinks.php'?>
<?php include 'templates/footer.php' ?>