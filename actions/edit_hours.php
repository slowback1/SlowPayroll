<?php
    
    include '../db/connect.php';
    include '../login/redirect.php';
    
    function create_nulls($num) {
        if($num == 0) {
            return null;
        }
        else {
            return $num;
        }
    }
    
    $id = $_POST['id'];
    $MoSt = create_nulls($_POST['MoSt']);
    $MoEn = create_nulls($_POST['MoEn']);
    $TuSt = create_nulls($_POST['TuSt']);
    $TuEn = create_nulls($_POST['TuEn']);
    $WeSt = create_nulls($_POST['WeSt']);
    $WeEn = create_nulls($_POST['WeEn']);
    $ThSt = create_nulls($_POST['ThSt']);
    $ThEn = create_nulls($_POST['ThEn']);
    $FrSt = create_nulls($_POST['FrSt']);
    $FrEn = create_nulls($_POST['FrEn']);
    $SaSt = create_nulls($_POST['SaSt']);
    $SaEn = create_nulls($_POST['SaEn']);
    $SuSt = create_nulls($_POST['SuSt']);
    $SuEn = create_nulls($_POST['SuEn']);
    
    
    $qry = "UPDATE employeeInfo SET 
        hoursMoSt='$MoSt',
        hoursMoEn='$MoEn',
        hoursTuSt='$TuSt',
        hoursTuEn='$TuEn',
        hoursWeSt='$WeSt',
        hoursWeEn='$WeEn',
        hoursThSt='$ThSt',
        hoursThEn='$ThEn',
        hoursFrSt='$FrSt',
        hoursFrEn='$FrEn',
        hoursSaSt='$SaSt',
        hoursSaEn='$SaEn',
        hoursSuSt='$SuSt',
        hoursSuEn='$SuEn'
    WHERE id=$id";
    if($db->query($qry) === TRUE) {
        redirect("../index.php");
    } else {
        echo "error " . $db->error;
    }
    
?>