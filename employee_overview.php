<?php include 'templates/header.php'; ?>
<?php include 'user_restrictions.php'; ?>
<?php include 'actions/get_total_hours.php';?>
<?php include 'actions/salary_info.php'; ?>
<div class="body">
    <h2>Overview</h2>
    <div class="bodyBox">
        <?php  
            include 'actions/get_one_employee.php';
            $user = $_COOKIE['user'];
            $result = get_one_employee($user);
            if($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                echo salary_info($row['salary'], $row['salary_type'], $row['pay_schedule'], $row['benefit_plan'], get_total_hours($row['hoursMoSt'], $row['hoursMoEn'], $row['hoursTuSt'], $row['hoursTuEn'], $row['WeSt'], $row['WeEn'], $row['ThSt'], $row['ThEn'], $row['FrSt'], $row['FrEn'], $row['SaSt'], $row['SaEn'], $row['SuSt'], $row['SuEn']), $row['firstname'], $row['lastname'], $row['email']);    
                }
                
            } else {
                echo "no info!";
            }
        ?>
    </div>
</div>
<?php include 'templates/mobile_quicklinks.php'?>
<?php include 'templates/footer.php'; ?>