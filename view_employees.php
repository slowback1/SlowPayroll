<?php 
    include 'templates/header.php';
    include 'admin_restrictions.php';
    include 'templates/employee_view.php';
    include 'actions/get_all_employees.php';
?>
    <div class="body">
        <?php
            if($_GET['update'] == true) {
                echo "<div class='errorMsg'><p>Successfully updated employee.</p></div>";
            }
        ?>
        <h2>Employee List</h2>
        <?php
            $result = get_all_employees();
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
    <?php include 'templates/mobile_quicklinks.php'?>
    <?php include 'templates/footer.php'; ?>