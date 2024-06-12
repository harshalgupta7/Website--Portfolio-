<?php
define('ROOT_URL','http://localhost/website%20template/') ;

    // database connection
    $servername = '127.0.0.1';
    $username = 'root';
    $password = '';
    $dbname = 'user_login_db';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn -> connect_error) {
        die('Connection Failed'. $conn -> connect_error);
    }
?>