<?php
    include_once __DIR__ . "/../controller/config.php";
    $conn = db_connection();

    if(!isset($_GET['id'])) {
        header('location: ../index.php');
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE id='".$id."' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $post = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index | page</title>
    <link rel="stylesheet" href="../public/assets/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
    <?php
    include_once "_partials/_navigation.php";
    ?>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">
            <div class="card w-100 border-0">
                <h1 class="text-center  mb-3 text-uppercase">
                    <?php 
                        echo $post['title'];
                    ?>
                </h1>
                <img src="../public/posts/<?php echo $post['photo']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        <?php
                            echo $post['content'];
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script src="../public/assets/js/bootstrap.min.js"></script>

</html>
