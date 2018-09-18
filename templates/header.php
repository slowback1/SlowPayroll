<?php 
    $isLoggedInEmployee = ($_COOKIE["user"] != null);
    $isLoggedInEmployer = ($_COOKIE["admin"] != null);
?>

<html>
    
    <head>
        <link rel="stylesheet" href="styles/style.css" />
        <title> SlowPayroll </title>
    </head>
    <body>
        <nav>
            <div class="homeLink">
                <a href="./index.php"><img src="imgs/home.png" alt="home icon" /></a>
            </div>
            <div class="headerLinks">
                <?php if($isLoggedInEmployee): ?>
                    <a href="user_settings.php">Settings</a>
                    <div class="loginSection">
                        <a href="login/logout_u.php">Logout</a>
                    </div>
                <?php endif; ?>
                <?php if($isLoggedInEmployer): ?>
                    <a href="view_employees.php">View Employees</a>
                    <a href="add_employee.php">Add An Employee</a>
                    <a href="payroll_overview.php">Payroll Overview</a>
                    <a href="hours_overview.php">Hours Overview</a>
                    <div class="loginSection">
                        <a href="login/logout_a.php">Logout</a>
                    </div>
                <?php endif;?>
                <?php if(!$isLoggedInEmployer && !$isLoggedInEmployee): ?>
                    <div class="loginSection">
                        <a href="employee_login.php">Login - Employee</a>
                        <a href="employer_login.php">Login - Employer</a>
                    </div>
                <?php endif; ?>
            </div>
                            <?php if($isLoggedInEmployer): ?> 
                    <div class='mobileLogoutSection'>
                        <a href="login/logout_a.php">Logout</a>
                    </div>
                <?php endif; ?>
                <?php if($isloggedinEmployee): ?>
                    <div class='mobileLogoutSection'>
                        <a href="login/logout_u.php">Logout</a>
                    </div>
                <?php endif; ?>
        </nav>