<!DOCTYPE html>
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
<main>
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Our Online Store</h1>
            <p>Discover our latest collection of products</p>
            <a href="#products" class="button">Shop Now</a>
        </div>
    </section>
    <section class="products" id="products">
        <h2>Nike Products</h2>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="product1.jpg" alt="Product 1">
                </div>
                <div class="product-info">
                    <h3>Nike Air Force 1</h3>
                    <p class="description">This iconic sneaker features a leather upper, a classic design, and a comfortable fit. It also has a cushioned sole for added support.</p>
                    <p class="price">$50.00</p>
                    <a href="#" class="button">Add to Cart</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="product2.jpg" alt="Product 2">
                </div>
                <div class="product-info">
                    <h3>Nike Cortez Basic Leather</h3>
                    <p class="description">This classic running shoe features a leather upper and a comfortable foam midsole. It also has a vintage finish and a stylish, low-cut design.</p>
                    <p class="price">$75.00</p>
                    <a href="#" class="button">Add to Cart</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="product3.jpg" alt="Product 3">
                </div>
                <div class="product-info">
                    <h3>Nike Classic Cortez Nylon</h3>
                    <p class="description">This retro-style sneaker has a nylon upper and a foam midsole for added comfort. It features a classic design and a vintage finish, making it a stylish choice for everyday wear.</p>
                    <p class="price">$100.00</p>
                    <a href="#" class="button">Add to Cart</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="product4.jpg" alt="Product 4">
                </div>
                <div class="product-info">
                    <h3>Nike Blazer Mid '77</h3>
                    <p class="description">This retro-style sneaker has a high-top design with a leather upper and vintage finish, complete with a comfortable foam tongue for added support.</p>
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
