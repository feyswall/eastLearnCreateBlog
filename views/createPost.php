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
        include_once "_partials/_navigation.php";
    ?>
</nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>
