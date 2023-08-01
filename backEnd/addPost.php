<?php

include_once __DIR__."/../controller/config.php";

$conn = db_connection();

if ( $conn ){
    header("location: createPost.php");
    exit();
}

if( isset($_POST['send'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $photo = $_FILES['photo'];

    $newTitle = mysqli_real_escape_string($conn, $title);
    $newContent = mysqli_real_escape_string($conn, $content);
    
    if( is_array($photo) ){
        if( count($photo) ){
            header("location: createPost.php");
            exit();
        }else{
            echo "endelea";
        }
    }

} else{
    header("location: createPost.php");
    exit();
}