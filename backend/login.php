<?php

require_once 'connect.php';

if($_POST){
    session_start ();
    $uname = $_POST['username'];
    $password = $_POST['pass'];

    $connect = connect();

    $queryCheckName = mysqli_query($connect, "SELECT username,password FROM users WHERE username='$uname'");

    if(mysqli_num_rows($queryCheckName) != 0){
        $row = mysqli_fetch_assoc($queryCheckName);
        if($row['password'] == $password){
            $_SESSION["uname"]=$uname;
            header('location: ../index.php');
        }
        else{
            echo "Wrong password";
        }
    }
    else{
        echo "You are not registered yet!";
    }
}

