<?php

include_once 'config.php';

$conn = db_connection();
$current_page = 1;
$offset = 2 * $current_page;
$records_per_page = 2;
if($conn) {
    $sql = "SELECT count(*) FROM posts";
    $query = mysqli_query($conn, $sql);
    $total_records = mysqli_fetch_row($query)[0];
    $total_pages = ceil($total_records / $records_per_page);

    print( $total_pages );

}