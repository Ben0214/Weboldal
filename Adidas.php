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
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="product1.jpg" alt="Product 1">
                </div>
                <div class="product-info">
                    <h3>Adidas Superstar</h3>
                    <p class="description">This iconic shoe features a classic design with a leather upper and rubber shell toe. It also has a comfortable, cushioned sole for all-day wear.</p>
                    <p class="price">$50.00</p>
                    <a href="#" class="button">Add to Cart</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="product2.jpg" alt="Product 2">
                </div>
                <div class="product-info">
                    <h3>Adidas Stan Smith</h3>
                    <p class="description">This retro-style sneaker features a leather upper and a comfortable foam midsole. It has a classic design with a perforated three-stripe detail and a simple, clean look.</p>
                    <p class="price">$75.00</p>
                    <a href="#" class="button">Add to Cart</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="product3.jpg" alt="Product 3">
                </div>
                <div class="product-info">
                    <h3>Adidas Continental 80</h3>
                    <p class="description">This vintage-inspired sneaker has a leather upper and a retro-style two-tone stripe detail. It also has a cushioned sole for added comfort.</p>
                    <p class="price">$100.00</p>
                    <a href="#" class="button">Add to Cart</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="product4.jpg" alt="Product 4">
                </div>
                <div class="product-info">
                    <h3>Adidas Samba</h3>
                    <p class="description">This classic indoor soccer shoe has a leather upper and a comfortable gum sole. It features a retro design with a suede toe cap and a T-toe overlay for added durability.</p>
                    <p class="price">$125.00</p>
                    <a href="#" class="button">Add to Cart</a>
                </div>
            </div>
        </div>
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

