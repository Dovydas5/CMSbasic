<?php
require '../../app/start.php';
require '../../app/function.php';

if (isset($_POST['submit-btn'])) {
    $username = $_POST['uid'];
    $password = $_POST['pwd'];
    $succeeded = login($username,$password,$db);
    if(!$succeeded){
        echo "<h1 class='wrapper'>Login failed</h1>";
    }else{
        header('Location:' . BASE_URL . '/admin/index.php');
    }
}
require VIEW_ROOT . '/admin/login.php';