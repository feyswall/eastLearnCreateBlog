<?php

require_once 'config.php';

/**
 * @throws Exception
 */
function imageUploadModel($file, $path)
{
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];

    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $resultArray = explode('.', $fileName);
    $fileExtension = strtolower(end($resultArray));

    $imageExtension = array('png', 'jpg', 'jpeg', 'webp');

    if (in_array($fileExtension, $imageExtension)) {
        if ($fileSize <= 2000000) {
            if ($fileError !== 0) {
                throw new Exception("File init Error was Found");
            } else {
                $fileNewName = uniqid('', true) . '.' . $fileExtension;
                $destination =  __DIR__."/uploads/". $fileNewName;
                $move_file = move_uploaded_file($fileTmpName, $destination);
                if ( $move_file ) {
                    return ['status' => "success", 'message' => 'Image Uploaded Successfully...', 'image' => $fileNewName];
                } else {
                    throw new Exception("Fail to move the Uploaded File");
                }
            }
        } else {
            throw new Exception("File Size Too Large...");
        }
    } else {
        throw new Exception("File Uploaded is not an image");
    }
}


/**
 * @throws Exception
 */
function addPostModel($request, $imageFile, $path)
{
    $conn = db_connection();

    // Escape the special string in our code;
    $title = mysqli_real_escape_string($conn, $request['title']);
    $content = mysqli_real_escape_string($conn, $request['content']);
    $created_at = date("Y-m-d H:i:s");

    // Uploading Image Function
    $fileStack = imageUploadModel($imageFile, $path);

    // creating the prepared statement in your project
    $sql = "INSERT INTO posts (title, content, created_at, image) VALUES ( ?, ?, ?, ? )";

    // create a prepared statement
    $stmt = mysqli_stmt_init($conn);

    // checking if preparation is success
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        throw new Exception();
    } else {
        // bind parameters to the placeholder
        /*
            what to note here is that the placeholder vary
            according to its data types
            - "s" for string
            - "i" for integer
            - "b" for BLOB
            - "d" for double
        */
        mysqli_stmt_bind_param($stmt, "ssss", $title, $content, $created_at, $fileStack['image']);
        if (mysqli_stmt_execute($stmt)) {
            return ['status' => 'success', 'message' => 'post created successfully'];
        } else {
            throw new Exception("Column Shit");
        }
    }
}
