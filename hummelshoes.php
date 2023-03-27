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
        <h2>Hummel Products</h2>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="product1.jpg" alt="Product 1">
                </div>
                <div class="product-info">
                    <h3>Hummel Stadil Classic</h3>
                    <p class="description">This retro-style sneaker features a leather and suede upper with a classic design. It also has a comfortable foam midsole for added support.</p>
                    <p class="price">$50.00</p>
                    <a href="#" class="button">Add to Cart</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="product2.jpg" alt="Product 2">
                </div>
                <div class="product-info">
                    <h3>Hummel Slimmer Stadil Low</h3>
                    <p class="description">This vintage-inspired shoe has a canvas and suede upper with a low-cut design. It features a classic look with a retro-style chevron detail.</p>
                    <p class="price">$75.00</p>
                    <a href="#" class="button">Add to Cart</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="product3.jpg" alt="Product 3">
                </div>
                <div class="product-info">
                    <h3>Hummel Deuce Court Tonal</h3>
                    <p class="description">This minimalist sneaker has a leather upper with a tonal design. It features a classic, low-cut silhouette and a comfortable foam midsole.</p>
                    <p class="price">$100.00</p>
                    <a href="#" class="button">Add to Cart</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="product4.jpg" alt="Product 4">
                </div>
                <div class="product-info">
                    <h3>Hummel Slimmer Stadil Duo Oiled Low</h3>
                    <p class="description">This casual shoe has a suede and canvas upper with a retro-style design. It also features a cushioned sole for added comfort.</p>
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

