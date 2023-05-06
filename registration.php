<h1>Registration</h1>

<form id="register" method="post" action="">
    <input name="username" type='text' placeholder='Username'>
    <input name="pass" type='password' placeholder='Password'>
    <input class="btn" type='submit' value='Register'>
</form>

<?php

require_once 'backend/connect.php';

if($_POST){
    session_start ();
    $uname = $_POST['username'];
    $password = $_POST['pass'];
    $isValidString = (bool) strlen(trim($uname));
    if(!$isValidString){
        echo "Dont use only whitespace!";
        exit(0);
    }
    $connect = connect();

    $queryCheckName = mysqli_query($connect, "SELECT username,password FROM users WHERE username='$uname'");
    if(mysqli_num_rows($queryCheckName) == 0){
        $queryinsrtrow = mysqli_query($connect, "INSERT INTO users(id, username, password) VALUES (' ','$uname','$password')");
        if(!$queryinsrtrow){
            echo "Error inserting into DB";
        }
        else{
            $_SESSION["uname"] = $uname;
            header('Location: index.php');
        }
    }else{
        echo "You are already registered!";
    }
}