<?php
session_start();
define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost:8080');
define('ADMINDIR','http://localhost/8080/admin/');


$db = new PDO('mysql:host=app_mysqli;dbname=cms', 'root', 'root');
