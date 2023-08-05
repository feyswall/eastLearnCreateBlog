<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index | page</title>
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
    <?php
        include_once "views/_partials/_navigation.php";
    ?>
</nav>

<div class="container">

    <a href="views/createPost.php" class="btn btn-primary w-25 mb-5">create post</a>

    <div class="row">
        <?php
        for ( $g=0; $g<5; $g++){
                ?>
                <div class="col-md-3 col-sm-12 mb-3">
                    <a href="views/singlePost.php">
                        <div class="card w-100">
                            <img src="public/assets/images/posts/kilimanjaro.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">some quick example text to build on the card title and make up the bulk of the card's content</p>
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

</body>
<script src="public/assets/js/bootstrap.min.js"></script>
</html>
