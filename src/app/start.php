<?php
session_start();
define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost:8080');
define('ADMINDIR','http://localhost/8080/admin/');


$servername = "app_mysqli";
$username = "root";
$password = "root";

try {
    $db = new PDO("mysql:host=$servername;dbname=cms", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}