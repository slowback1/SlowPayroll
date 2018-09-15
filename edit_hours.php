<?php include 'templates/header.php' ?>

<div class="body">
<?php 
    $id = $_POST['id'];
    
    echo "
<form id='edit_schedule' action='../actions/edit_hours.php' method='post'>
    <fieldset class='hoursField'>
    <input type='hidden' name='id' value='$id' />
    <p>Monday</p>
    Start: <input type='number' name='MoSt' id='MoSt' min='0' max='24' default='0' /> End: <input type='number' name='MoEn' id='MoEn' min='0' max='24' default='0' /> <br />
    <p>Tuesday</p>
    Start: <input type='number' name='TuSt' id='TuSt' min='0' max='24' default='0' /> End: <input type='number' name='TuEn' id='TuEn' min='0' max='24' default='0' /> <br />
    <p>Wednesday</p>
    Start: <input type='number' name='WeSt' id='WeSt' min='0' max='24' default='0' /> End: <input type='number' name='WeEn' id='WeEn' min='0' max='24' default='0' /> <br />
    <p>Thursday</p>
    Start: <input type='number' name='ThSt' id='ThSt' min='0' max='24' default='0' /> End: <input type='number' name='ThEn' id='ThEn' min='0' max='24' default='0' /> <br />
    <p>Friday</p>
    Start: <input type='number' name='FrSt' id='FrSt' min='0' max='24' default='0' /> End: <input type='number' name='FrEn' id='FrEn' min='0' max='24' default='0' /> <br />
    <p>Saturday</p>
    Start: <input type='number' name='SaSt' id='SaSt' min='0' max='24' default='0' /> End: <input type='number' name='SaEn' id='SaEn' min='0' max='24' default='0' /> <br />
    <p>Sunday</p>
    Start: <input type='number' name='SuSt' id='SuSt' min='0' max='24' default='0' /> End: <input type='number' name='SuEn' id='SuEn' min='0' max='24' default='0' /> <br />
    <input type='submit' name='submit' value='submit' />
    </fieldset>
</form>"
    
    
?>
</div>
<?php include 'templates/footer.php' ?>
<!-- neater version of above
<form id='edit_schedule' action='../actions/edit_hours.php' method='post'>
    <input type='hidden' name='id' value='$id' />
    <p>Monday</p>
    Start: <input type='number' name='MoSt' min='0' max='24' /> End: <input type='number' name='MoEn' min='0' max='24' /> <br />
    <p>Tuesday</p>
    Start: <input type='number' name='TuSt' min='0' max='24' /> End: <input type='number' name='TuEn' min='0' max='24' /> <br />
    <p>Wednesday</p>
    Start: <input type='number' name='WeSt' min='0' max='24' /> End: <input type='number' name='WeEn' min='0' max='24' /> <br />
    <p>Thursday</p>
    Start: <input type='number' name='ThSt' min='0' max='24' /> End: <input type='number' name='ThEn' min='0' max='24' /> <br />
    <p>Friday</p>
    Start: <input type='number' name='FrSt' min='0' max='24' /> End: <input type='number' name='FrEn' min='0' max='24' /> <br />
    <p>Saturday</p>
    Start: <input type='number' name='SaSt' min='0' max='24' /> End: <input type='number' name='SaEn' min='0' max='24' /> <br />
    <p>Sunday</p>
    Start: <input type='number' name='SuSt' min='0' max='24' /> End: <input type='number' name='SuEn' min='0' max='24' /> <br />
    <input type='submit' name='submit' value='submit' />
</form>

-->