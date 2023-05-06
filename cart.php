<?php

require_once 'backend/retrieve_data.php';
session_start();
if (!isset($_SESSION['uname'])) {
    header('location: ../login.php');
}

$usr = $_SESSION['uname'];
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/ProductsStyle.css">
    <link rel="stylesheet" type="text/css" href="css/shopping_cart.css">
</head>
<body>
<div id="nav"></div>
<script src="main.js"></script>

<div class="cart">
    <div class="cart-header">
        <h1>Your Cart</h1>
    </div>
    <?php getCartContent($usr); ?>
</div>

</div>
</body>
</html>
