<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'fail') {
?>
        <div class="alert alert-danger"><?php echo $_GET['message']; ?></div>
    <?php
    }
    if ($_GET['status'] == 'success') {
    ?>
        <div class="alert alert-success"><?php echo $_GET['message']; ?></div>
<?php
    }
}
?>