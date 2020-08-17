<?php require VIEW_ROOT . '/templates/header.php';?>
    <?php if (!$page):?>
        <p>Project not created</p>
    <?php else: ?>
        <h2><?php echo $page['title'];?></h2>
        <?php echo $page['body'];?>

        <p class="faded">Created on <?php echo $page['created']->format('d M Y H:m')?>
            <?php  if ($page['updated']):?>
        <p class="faded">Last Updated <?php echo $page['updated']->format('d M Y H:m')?>
            <?php endif?>

        </p>
    <?php endif;?>

<?php require VIEW_ROOT . '/templates/footer.php';?>