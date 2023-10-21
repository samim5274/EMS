<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "emsdb";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn)
    {
        die("Connection Faild: ".$conn->connection_error);
    }
