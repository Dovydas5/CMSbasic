<?php
require '../app/start.php';
session_start();

$pages = $db->query('SELECT id,label, slug FROM pages')->fetchAll(PDO::FETCH_ASSOC);


require VIEW_ROOT . '/home.php';
