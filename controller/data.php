<?php

include_once "config.php";
$conn = db_connection();

// COUNT
$sql = "SELECT COUNT(*) FROM posts";
$query = mysqli_query($conn, $sql);
print_r( mysqli_fetch_row($query)[0]);

// LIMIT
$offset = 4;
$limit = 3;
$sql2 = "SELECT * FROM posts LIMIT ".$offset.", ".$limit;
$query2 = mysqli_query($conn, $sql2);
print_r( mysqli_fetch_all($query2));
