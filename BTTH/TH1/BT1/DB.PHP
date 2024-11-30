<?php
    $servername = "127.0.0.1";
    $database = "flowerdb";
    $username = "root";
    $password = "";
    $charset = "utf8mb4";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    };
?>