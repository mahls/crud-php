<?php

    $servername = "localhost";
    $username =   "matt";
    $password =   "matt";
    $database =   "crudoperation";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection 
    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }

?> 