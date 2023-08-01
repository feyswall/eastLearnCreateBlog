<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index | page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
    <?php
        include_once "views/_partials/_navigation.php";
    ?>
</nav>

    <div class="container mt-5">

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