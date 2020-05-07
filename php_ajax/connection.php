<?php
    $host = "localhost";
    $database = "db_ajax";
    $username = "root";
    $pass = "";
    $port = "3306";

    $db1 = new mysqli($host, $username, $pass, $database, $port);
    if ($db1->connect_error) {
        die('Connection failed:' . $conn->connect_error);
    }
?>