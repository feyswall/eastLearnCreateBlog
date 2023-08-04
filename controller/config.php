<?php

function db_connection() {

        $dbserver = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'test_blog';

        $conn = mysqli_connect( $dbserver, $dbuser, $dbpass, $dbname );

        if ( $conn ){
            return $conn;
        }
        return null;
}