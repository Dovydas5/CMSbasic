<?php
require '../../app/start.php';
require '../../app/function.php';


ifLogged();
$pages = $db->query("SELECT id, label, title, slug FROM pages ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);


if(ifLogged()){
    require VIEW_ROOT . '/admin/list.php';
}else{
    header('Location:' . BASE_URL . '/admin/login.php');
}
