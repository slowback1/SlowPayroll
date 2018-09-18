<?php

?>
<?php include 'templates/header.php'; ?>

<div class="body">
    <form method='post' name='edit_benefits' action='actions/edit_benefits.php' id='edit_benefits'>
        <fieldset class='hoursField'>
        <input type='hidden' name='id' id='id' value='<?php echo $_POST['id']; ?>' />
        <p>Choose Benefits Plan For <?php echo $_POST['id']; ?></p>
        <input type="radio" id='benefit' name="benefit" value="full" checked> Full Benefits (all insurances, 401k matching, PTO, LRB's) <br />
        <input type="radio" id='benefit' name="benefit" value="partial"> Partial Benefits(Only Health Insurance, 401k matching, PTO, LRB's) <br />
        <input type="radio" id='benefit' name="benefit" value="minimum"> Minimum Benefits(Only LRB's)
        </fieldset>
        <input type="submit" name="submit" value="submit">
    </form>
</div>
<?php include 'templates/mobile_quicklinks.php' ?>

<?php include 'templates/footer.php';?>