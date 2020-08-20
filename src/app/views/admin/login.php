<?php require VIEW_ROOT . '/templates/header.php'; session_start();
?>

    <form id="login" class="input-group" action="" method="POST">
        <input type="text" class="input-field"  name="uid" placeholder="admin">
        <input type="password" class="input-field"  name="pwd" placeholder="admin">
        <button type="submit" class="submit-btn" name="submit-btn">Log in</button>
    </form>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>