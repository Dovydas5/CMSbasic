<?php require VIEW_ROOT . '/templates/header.php';?>

<?php if (empty($pages)):?>
    <p>No pages yet</p>
<?php else:?>
    <table>
        <thead>
            <tr>
                <th>Label</th>
                <th>Title</th>
                <th>Slug</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pages as $page):?>
            <tr>
                <td><?php echo $page['label'];?></td>
                <td><?php echo $page['title'];?></td>
                <td><a href="<?php echo BASE_URL;?>/page.php?page=<?php echo $page['slug'];?>"><?php echo $page['slug'];?></a></td>
                <td><a href ="<?php echo BASE_URL;?>/admin/edit.php?id=<?php echo $page['id']?>">Edit</a></td>
                <td><a href ="<?php echo BASE_URL;?>/admin/delete.php?id=<?php echo $page['id']?>">Delete</a></td>

            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php endif;?>
    <a href="<?php echo BASE_URL;?>/admin/add.php">Add new page</a><br>
    <a href="<?php echo BASE_URL;?>/index.php">User Page</a>
    <a href="<?php echo BASE_URL;?>/admin/logout.php">Logout</a>


<?php require VIEW_ROOT . '/templates/footer.php';?>