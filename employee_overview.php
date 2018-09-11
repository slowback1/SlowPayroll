<?php include 'templates/header.php'; ?>
<?php include 'user_restrictions.php'; ?>
<div class="body">
    <h2>Overview</h2>
    <div class="bodyBox">
        <h3>Salary: </h3>
        <?php  
            include 'actions/get_one_employee.php';
            $user = $_COOKIE['user'];
            $result = get_one_employee($user);
            if($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                echo"<h2>$" . $row['salary'] . "</h2>";    
                }
                
            } else {
                echo "no info!";
            }
        ?>
    </div>
</div>

<?php include 'templates/footer.php'; ?>