<?php require VIEW_ROOT . '/templates/header.php';?>

    <h2>Add New project</h2>
    <form action="<?php echo BASE_URL;?>/admin/add.php" method="POST">
        <label for="title">
            Title
            <input type="text" name="title" id="title" required>
        </label>
        <label for="label">
            Label
            <input type="text" name="label" id="label"required>
        </label>
        <label for="slug">
            Slug
            <input type="text" name="slug" id="slug"required>
        </label>

        <label for="body">
            BODY
            <textarea name="body" id="body" cols="30" rows="10" required></textarea>
        </label>
        <input type="submit" value="Add">
    </form>


<?php require VIEW_ROOT . '/templates/footer.php';?>
