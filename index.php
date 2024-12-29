<?php
include_once __DIR__ . "/controller/config.php";
$conn = db_connection();

// idadi ya posts katika page
$postsPerPage = 4;

// idadi ya pages zote zitakazo tokea
$sql = "SELECT COUNT(*) FROM posts";
$query = mysqli_query($conn, $sql);
$numberOfPosts = mysqli_fetch_row($query)[0];

$pagesCount = ceil($numberOfPosts / $postsPerPage);

// pakua data za page ya hivi sasa
$result = isset($_GET['page']) ? $_GET['page'] : 1;
if($result < 1 || $result > $pagesCount) {
    $result = 1;
}
$currentPage = $result;

$offset = $postsPerPage * ($currentPage - 1);
$limit = $postsPerPage;
$sql2 = "SELECT * FROM posts LIMIT ".$offset.", ".$limit;
$query2 = mysqli_query($conn, $sql2);

?>

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
            while ($row = mysqli_fetch_assoc($query2)) {
            ?>
                <div class="col-md-3 col-sm-12 mb-3">
                    <a href="views/singlePost.php">
                        <div class="card w-100">
                            <img src="public/posts/<?php echo $row['photo']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                <p class="card-text">
                                    <?php echo $row['content']; ?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php
                    for ($i = 1; $i <= $pagesCount; $i++) {
                    ?>
                        <li class="page-item <?php if($currentPage == $i) { echo "active"; } ?>">
                            <a class="page-link" href="?page=<?php echo $i; ?>">
                            <?php echo $i; ?>
                        </a></li>

                    <?php
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>

</body>
<script src="public/assets/js/bootstrap.min.js"></script>

</html>