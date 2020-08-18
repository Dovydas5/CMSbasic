<?php
require '../../app/start.php';


//$stmt = $db->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
//$stmt->execute(array(
//    "username" => "admin",
//    "password" => $hashedPwd));
if (isset($_POST['submit-btn'])) {


    $username = $_POST['uid'];
    $password = 'admin';
    $hashedPwd = password_hash($password, PASSWORD_BCRYPT, array('cost' => 10));

    $SQLQuery = "SELECT * FROM users WHERE username = :username";
    $stmt = $db->prepare($SQLQuery);
    $stmt->execute(array(':username' => $username));

    while ($row = $stmt->fetch()) {
        $id = $row['id'];
        $hashedPwd = $row['password'];
        $username = $row['username'];


        if (password_verify($password, $hashedPwd)) {
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;
            header('Location: index.php');
        } else {
            echo "<h1>Wrong username or password</h1>";
        }

    }
}
require VIEW_ROOT . '/admin/login.php';