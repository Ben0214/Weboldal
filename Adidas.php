<?php

require 'backend/retrieve_data.php';

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <title>Simple web Development Template</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .header {
            display: flex;
            justify-content: flex-end;
            padding: 20px;
        }

        #login-form {
            margin-right: 20px;
        }
    </style>

    <html>
    <head>
        <title>Modern Online Store</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/ProductsStyle.css">
        <link rel="stylesheet" type="text/css" href="css/nav.css">

    </head>
<body>
<div id="nav"></div>
<script src="main.js"></script>

<div class="header">
    <div id="login-form"></div>
</div>
</body>
</html>

<main>
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Our Online Store</h1>
            <p>Discover our latest collection of products</p>
            <a href="#products" class="button">Shop Now</a>
        </div>
    </section>
    <section class="products" id="products">
        <h2>Adidas Products</h2>
        <?php getProducts("Adidas"); ?>
    </section>


    <section class="contact">
        <h2>Contact Us</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <label for="message">Message:</label>
            <textarea id="message" name="message"></textarea>
            <button type="submit" class="button">Send Message</button>
        </form>
    </section>
</main>
<footer>
    <p>Copyright © 2023</p>
</footer>
</body>
</html>

