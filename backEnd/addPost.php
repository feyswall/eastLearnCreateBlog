<?php

include_once __DIR__."/../controller/config.php";

$conn = db_connection();

if ( !$conn ){
    header("location: ../views/createPost.php");
    exit();
}

if( isset($_POST['send'])){
    date_default_timezone_set("Africa/Dar_es_salaam");
     // tarehe ya leo
    $today = date("Y-m-d h:i:s");

    $title = $_POST['title'];
    $content = $_POST['content'];
    $photo = $_FILES['photo'];

    $newTitle = mysqli_real_escape_string($conn, $title);
    $newContent = mysqli_real_escape_string($conn, $content);
    
    if( is_array($photo) ){
        if( count($photo) < 1){
            header("location: ../views/createPost.php");
            exit();
        }else{
            // Upload image file
            $fileName = $photo['name'];
            $fileTmpName = $photo['tmp_name'];

            $fileSize = $photo['size'];
            $fileError = $photo['error'];
            $fileType = $photo['type'];

            $resultArray = explode('.', $fileName);
            $fileExtension = strtolower(end($resultArray));

            $imageExtension = array('png', 'jpg', 'jpeg', 'webp', 'jfif');

            if (in_array($fileExtension, $imageExtension)) {
                if ($fileSize <= 2000000) {
                    if ($fileError !== 0) {
                        echo "File init Error was Found";
                    } else {
                        $fileNewName = uniqid('', true) . '.' . $fileExtension;
                        $destination =  __DIR__."/../public/posts/". $fileNewName;
                        $move_file = move_uploaded_file($fileTmpName, $destination);
                        if ( $move_file ) {
                            // save data katika database
                            $sql = "INSERT INTO posts 
                                (title,content,photo,created_at)
                                    VALUES (
                                        '".$newTitle."',
                                        '".$newContent."', 
                                        '".$fileNewName."',
                                        '".$today."');";
                            if (mysqli_query($conn, $sql)){
                                header("location: ../views/createPost.php?status=success&message=post created successfully");
                                exit();
                            }else{
                                echo "hazijaingia";
                            }
                        } else {
                            echo "Fail to move the Uploaded File";
                        }
                    }
                } else {
                    echo "File Size Too Large...";
                }
            } else {
                echo "File Uploaded is not an image";
            }
        }
    }

} else{
    header("location: ../views/createPost.php");
    exit();
}
