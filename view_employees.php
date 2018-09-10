<?php 
    include 'templates/header.php';
    include 'admin_restrictions.php';
    include 'db/connect.php';
    include 'templates/employee_view.php';
?>
    <div class="body">
        <h2>Employee List</h2>
        <?php
            $qry = "select * from employeeInfo";
            $result = $db->query($qry);
            if($result->num_rows > 0 ) {
                echo "<div class='bodyTable'>";
                echo "<div class='bodyRow'><div class='bodyRowItemFirst'></div><div class='bodyRowItem'>ID</div><div class='bodyRowItem'>Name</div><div class='bodyRowItem'>Salary</div><div class='bodyRowItemLast'>Payment Due Date</div></div>";
                while($row = $result->fetch_assoc()) {
                    employee_view($row['id'], $row['firstname'], $row['lastname'], $row['salary'], $row['salary_type'], $row['pay_schedule']);
                }
                echo "</div>";
            } else {
                echo "no employee info!";
            }
        ?>
    </div>
    <?php include 'templates/footer.php'; ?>