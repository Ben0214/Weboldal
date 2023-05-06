<?php

function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "accounts";
    $conn = mysqli_connect($servername,$username,$password, $dbname) or die ("couldn't connect");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}
