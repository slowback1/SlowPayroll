<?php 

function Login() {
    include '../db/connect.php';
    include 'test_input.php';
    if(empty($_POST['username'])) {
        echo "needs both username";
        return false;
    }
    $username = test_input($_POST['username']);
    $k = $db->query("select * from employeeInfo");
    if($k->num_rows > 0) {
        while($row = $k->fetch_assoc()) {
            if($username == $row['email']) {
                echo "found a match";
                setcookie("user", $row["id"], time() + 86400 * 7, "/" );
                redirect('../index.php');
            }
        }
        echo "username or password don't match";
        redirect('../employee_login.php?ecode=badinfo');
        return false;
    }
}
include 'redirect.php';
Login();