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

    <div class="container mt-5">

        <?php

        if ( isset($_GET['status']) ){
            if ( $_GET['status'] == 'success'){
                ?>
                <div class="alert alert-success">
                    <span><?php echo $_GET['message']; ?></span>
                </div>
                <?php
            }
        }

        if ( isset($_GET['status']) ){
            if ( $_GET['status'] == 'error'){
                ?>
                <div class="alert alert-success">
                    <span><?php echo $_GET['message']; ?></span>
                </div>
                <?php
            }
        }

        ?>


       <div class="card">
           <div class="card-body">
              <div class="form-group">
                  <form action="/EastCoders/blog/backEnd/createPost.php" method="POST" enctype="multipart/form-data">
                      <div>
                          <label for="title">Title</label>
                          <input type="text" name="title" class="form-group form-control" id="title" />
                      </div>

                      <div>
                          <label for="content">Content</label>
                          <input type="text" name="content" class="form-group form-control" id="description">
                      </div>

                      <div class="mt-2">
                          <label for="image"></label>
                          <input type="file" name="image" id="image">
                      </div>
                      <div class="mt-2">
                          <button class="btn btn-primary btn-sm" type="send">submit</button>
                      </div>
                  </form>
              </div>
           </div>
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