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

            <div class="col-sm-10 col-md-8">
                <?php
                    include_once "_partials/_prompt.php";
                ?>
            </div>

            <div class="col-md-8 col-sm-10">
            <div class="card">
           <div class="card-body">
              <div class="form-group">
                  <form action="../backEnd/addPost.php" method="POST" enctype="multipart/form-data">
                      <div>
                          <label for="title">Title</label>
                          <input type="text" name="title" class="form-group form-control" id="title" />
                      </div>

                      <div>
                          <label for="content">Content</label>
                          <textarea type="text" name="content" class="form-control" id="description"
                          rows="7"></textarea>
                      </div>

                      <div class="mt-2">
                          <label for="image"></label>
                          <input type="file" name="photo" id="image">
                      </div>
                      <div class="mt-2">
                          <button class="btn btn-primary btn-sm" name="send" type="submit">submit</button>
                      </div>
                  </form>
              </div>
           </div>
       </div>
            </div>
        </div>
    </div>

    </body>
    <script src="../public/assets/js/bootstrap.min.js"></script>

</html>
