<?php
require_once __DIR__."/../controller/postsController.php";
require_once __DIR__."/../models/config.php";


// receive data from our form
$request = $_POST;
$imageFile = $_FILES['image'];
$path = __DIR__."/../public/assets/images/posts";

$result = createPost( $request, $imageFile, $path );

if ( is_array($result) ){
    header("Location: ../views/admin/createPost.php?status=success&message=post created successfully");
    exit();
}else{
    header("Location: ../views/admin/createPost.php?status=error&message=unknown error");
    exit();
}


