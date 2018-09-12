<?php 

function Login() {
    include '../db/connect.php';
    include 'test_input.php';
    if(empty($_POST['username']) || empty($_POST['password'])) {
        echo "needs both username and password";
        return false;
    }
    $username = test_input($_POST['username']);
    $password = storePW(test_input($_POST['password']));
    $k = $db->query("select * from employeeInfo");
    if($k->num_rows > 0) {
        while($row = $k->fetch_assoc()) {
            if($username == $row['email'] && $password == $row['password']) {
                echo "found a match";
                setcookie("user", $row["id"], time() + 86400 * 7, "/" );
                redirect('../index.php');
            }
        }
        echo "username or password don't match";
        return false;
    }
}
include 'redirect.php';
Login();