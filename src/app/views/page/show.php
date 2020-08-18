<?php require VIEW_ROOT . '/templates/header.php';?>
    <?php if (!$page):?>
        <p>Project not created</p>
    <?php else: ?>
        <h2><?php echo $page['title'];?></h2>
        <?php echo $page['body'];?>

    <?php endif;?>

<?php require VIEW_ROOT . '/templates/footer.php';?>