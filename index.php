<?php

require_once  __DIR__."/controller/postsController.php";

?>

<!doctype html>
<html lang="en">
<head>
    <?php
        include_once "views/_partials/_head.php";
    ?>
    <title>index | page</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
    <?php
        include_once "views/_partials/_navigation.php";
    ?>
</nav>

<div class="container mt-5">
    <a href="views/admin/createPost.php" class="btn btn-primary w-25 mb-5">create post</a>
    <div class="row">
        <?php
        $posts = getAllPosts();
        foreach ( $posts as $key => $post ){
                ?>
                <div class="col-md-3 col-sm-12 mb-3">
                    <a href="views/singlePost.php">
                        <div class="card w-100">
                            <span><?php echo $post['image']; ?></span>
                            <img src="public/assets/images/posts/<?php echo $post['image'] ; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php $post['title'] ;?></h5>
                                <p class="card-text"><?php echo $post['content'] ?>.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
            }
        ?>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
<?php
    include_once "views/_partials/_script.php";
?>

<?php
 include_once "views/_partials/_footer.php";
?>

</body>
</html>
