<?php 
    include 'templates/header.php';
    include 'admin_restrictions.php';
    include 'db/connect.php';
?>
    <div class="body">
        <h2>Employee List</h2>
        <?php
            $qry = "select * from employeeInfo";
            $result = $db->query($qry);
            if($result->num_rows > 0 ) {
                echo "<div class='bodyTable'>";
                echo "<div class='bodyRow'><div class='bodyRowItemFirst'></div><div class='bodyRowItem'>ID</div><div class='bodyRowItem'>Name</div><div class='bodyRowItemLast'>Salary</div></div>";
                while($row = $result->fetch_assoc()) {
                    echo "<div class='bodyRow'><div class='bodyRowItemFirst'><form id='delete_employee' action='actions/delete_employee.php' method='post'><input type='hidden' name='id' value='".$row['id']."'/><input type='submit' name='delete' value='delete' /></form></div><div class='bodyRowItem'>".$row['id']."</div><div class='bodyRowItem'>".$row['firstname'] . " " . $row['lastname'] . "</div><div class='bodyRowItemLast'>".$row['salary']."</div></div>";
                }
                echo "</div>";
            } else {
                echo "no employee info!";
            }
        ?>
    </div>
    <?php include 'templates/footer.php'; ?>