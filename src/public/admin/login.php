<?php
require '../../app/start.php';

if(isset($_POST['submit-btn'])) {



    $username = $_POST['uid'];
    $password = $_POST['pwd'];
    $password = md5($password);

    try{
        $SQLQuery = "SELECT * FROM users WHERE username = :username";
        $stmt = $db->prepare($SQLQuery);
        $stmt->execute(array(':username'=>$username));

        while ($row = $stmt ->fetch()){
            $id = $row['id'];
            $hashedPwd = $row['password'];
            $username = $row['username'];


            if(password_verify($password, $hashedPwd)){
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                header('Location: index.php');
            }
            else {
                echo "error:psw arba username";
            }

        }
    }
    catch (PDOException $e){
        echo "error: " . $e->getMessage();
    }

}
require VIEW_ROOT . '/admin/login.php';