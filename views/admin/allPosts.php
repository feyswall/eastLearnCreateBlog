<?php
require_once "../../controller/postsController.php";
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    include_once "../_partials/_head.php";
    ?>
    <title>index | page</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
    <?php
    include_once "../_partials/_navigation.php";
    ?>
</nav>

<div class="container">
    <div>
        <table class="table-responsive">
            <thead>
              <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Created At</th>
              </tr>
            </thead>

            <tbody>
                <tr>
                    <?php
                        $posts = getAllPosts();
                        foreach ( $posts as $key => $post ){
                            ?>
                            <tr>
                                <td><?php $key + 1; ?></td>
                                <td><?php $post['title']; ?></td>
                                <td><?php $post['content']; ?></td>
                                <td><?php $post['created_at']; ?></td>
                            </tr>
                            <?php
                        }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
include_once "../_partials/_script.php";
?>

<?php
include_once "../_partials/_footer.php";
?>

</body>
</html>