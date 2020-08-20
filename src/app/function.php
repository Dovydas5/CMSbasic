<?php
require 'start.php';

function login($username,$password,$db){

        $SQLQuery = "SELECT * FROM users WHERE username = :username";
        $stmt = $db->prepare($SQLQuery);
        $stmt->execute(array(':username' => $username));

        while ($row = $stmt->fetch()) {
            $id = $row['id'];
            $hashedPwd = $row['password'];
            $username = $row['username'];
        }

    if (password_verify($password, $hashedPwd)) {
        $_SESSION['auth'] = true;
//        header('Location: index.php');
        return true;
    } else {
        return false;
    }
}
function ifLogged(){
    if($_SESSION['auth'] == true){
        return true;
    }else
        return false;
}
