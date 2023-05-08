<?php

if($_POST){
    session_start ();
    if(!isset($_SESSION['uname'])) {
        header('location: ../index.php');
    }
    require_once 'connect.php';
    $connect = connect();
    $usr = $_SESSION['uname'];
    $id = $_POST['prodId'];
    $useridres = mysqli_query($connect, "SELECT id, username FROM users WHERE username = '$usr'")->fetch_assoc();
    $userid = $useridres['id'];

    $queryinsrtrow = mysqli_query($connect, "INSERT INTO cart(userid, productid) VALUES ('$userid','$id')");
    if($queryinsrtrow){
        echo "inserted";
    }
    else{
        echo "Some error";
    }
}
