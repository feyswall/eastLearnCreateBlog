<?php

include_once 'config.php';

$conn = db_connection();
$current_page = 0;
$offset = 2 * $current_page;
$records_per_page = 2;
if($conn) {
    $sql = "SELECT * FROM posts LIMIT $offset, $records_per_page";
    $query = mysqli_query($conn, $sql);
    print_r( mysqli_fetch_assoc($query));
}