<?php 
include '../db/connect.php';
include 'test_input.php';
include '../db/password_hasher.php';

function Login() {
    if(empty($_POST['username']) || empty($_POST['password'])) {
        echo "needs both username and password";
        return false;
    }
    $username = test_input($_POST['username']);
    $password = storePW(test_input($_POST['password']));
    $query = "select name, email from adminUsers where username='$username' and password='$password' and confirmcode='y'";
    $result = mysql_query($qry, $db);
    if(!$result || mysql_num_rows($result) <= 0) {
        echo "username or password don't match";
        return false;
    }
    session_start();
    $_SESSION[$this->GetLoginSessionVar()] = $username;
}
/*

function Login() {
    if(empty($_POST['username'])) {
        $this->HandleError("username is empty!");
        return false;
    }
    if(empty($_POST['password'])) {
        $this->HandleError("password is empty!");;
        return false;
    }
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if(!$this->CheckLoginDB($username, $password)) {
        return false;
    }
    session_start();
    $_SESSION[$this->GetLoginSessionVar()] = $username;
    
    return true;
}

function CheckLoginDB($username, $password) {
    if(!$this->DBLogin()) {
        $this->HandleError("Database login failed!");
        return false;
    }
    $username = $this->SanitizeForSQL($username);
    $pwdmd5 = md5($password);
    $qry = "Select name, email from $this->tablename " . " where username='$username' and password='$pwdmd5' " . " and confirmcode='y'";
    $result = mysql_query($qry, $this->connection);
    if(!$result || mysql_num_rows($result) <= 0) {
        $this->HandleError("The username or password does not match");
        return false;
    }
    return true;
}
*/
?>