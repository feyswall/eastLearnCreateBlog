<?php

function db_connection() {
        $dbserver = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'east_blog';
        $conn = mysqli_connect( $dbserver, $dbuser, $dbpass, $dbname );

        if ( !$conn ){
            throw new Exception("something went wrong");
        }
        return $conn;
}