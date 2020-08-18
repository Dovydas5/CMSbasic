<?php
require '../app/start.php';
if (empty($_GET['page'])){
    $page = false;
}else{
    $slug = $_GET['page'];

    $page = $db->prepare("SELECT * FROM pages WHERE slug = :slug");
    $page->execute(['slug' => $slug]);
    $page = $page->fetch(PDO::FETCH_ASSOC);

}
require VIEW_ROOT . '/page/show.php';