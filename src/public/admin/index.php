<?php
require '../../app/start.php';

$pages = $db->query("SELECT id, label, title, slug FROM pages ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/list.php';