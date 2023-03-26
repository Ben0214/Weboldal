<?php

if($_POST){
    session_start ();
    $uname = $_POST['username'];
    $password = $_POST['pass'];

    $connect = mysqli_connect("localhost","root","", "accounts") or die ("couldn't connect");

    $queryCheckName = mysqli_query($connect, "SELECT username,password FROM users WHERE username='$uname'");

    if(mysqli_num_rows($queryCheckName) == 0){
        $queryinsrtrow = mysqli_query($connect, "INSERT INTO users(id, username, password) VALUES (' ','$uname','$password')");
        if(!$queryinsrtrow){
            echo "Error inserting into DB";
        }
        else{
            $_SESSION["uname"] = $uname;
            header('Location: ../index.php');
        }
    }else{
        $_SESSION["uname"]=$uname;
        header('location: index.php');
//        if(mysqli_fetch_assoc($queryCheckName)['password'] == ){
//            $_SESSION["uname"]=$uname;
//        }
//        else{
//            echo "Wrong password";
//        }
    }
}

