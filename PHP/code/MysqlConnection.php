<?php
    $hostname = "localhost"; // db host 127.0.0.1 or localhost
    $database = "tutor_query"; // db name tutor_query or other db name you have or created
    $username = "root"; // db username default root 
    $password = ""; // db password default null
    $connect = new mysqli($hostname, $username, $password, $database);
    // Checking connection   
    if (!$connect) {
        die("Database does not connected: " . $connect->connect_error);
    }
?>