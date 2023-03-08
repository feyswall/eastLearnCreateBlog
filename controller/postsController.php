<?php
include_once __DIR__."/../models/postModel.php";
include_once __DIR__."/../models/config.php";


/**
 * @param $request
 * @return string
 * @throws Exception
 */

function createPost($request, $imageFile, $path) {
    try {
        $status = addPostModel($request, $imageFile, $path);
        return ['status' => 1, 'message' => $status['message']];
    }catch (Exception $e) {
        return ['status' => 0, 'message' => "Fail to create post ".$e->getMessage()];
    }
}

function getAllPosts() {
    try {
        $conn = db_connection();
        $sql = "SELECT * FROM posts";
        $query = mysqli_query( $conn, $sql );
        $rows = array();
        while ( $row = mysqli_fetch_assoc($query) ){
            $rows[] = $row;
        }
        return $rows;
    }catch (Exception $e){
        return ['status' => 0, 'message' => 'Fail to Fetch '.$e->getMessage() ];
    }
}



