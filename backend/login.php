<?php

if($_POST){
    session_start ();
    $uname = $_POST['username'];
    $password = $_POST['pass'];
    echo "Hello $uname, nice password: $password";
    $_SESSION["uname"]=$uname;
    $connect = mysqli_connect("localhost","root","", "accounts") or die ("couldn't connect");
    $queryinsrtrow = mysqli_query($connect, "INSERT INTO users(id, username, password) VALUES (' ','$uname','$password')");

    if($queryinsrtrow){
        echo "Success";
    }
    else{
        echo "asdasdad";
    }
}

