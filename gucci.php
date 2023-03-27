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
        <h2>Gucci Products</h2>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="product1.jpg" alt="Product 1">
                </div>
                <div class="product-info">
                    <h3>Gucci GG Jacquard Turtleneck Sweater</h3>
                    <p class="description">This luxurious sweater features a wool and cashmere blend with a jacquard GG pattern. It also has a comfortable turtleneck design and ribbed cuffs and hem.</p>
                    <p class="price">$50.00</p>
                    <a href="#" class="button">Add to Cart</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="product2.jpg" alt="Product 2">
                </div>
                <div class="product-info">
                    <h3>Gucci Logo Print Cotton T-Shirt</h3>
                    <p class="description">This classic t-shirt features a comfortable cotton fabric with a bold Gucci logo print. It also has a relaxed fit and a ribbed crewneck collar.</p>
                    <p class="price">$75.00</p>
                    <a href="#" class="button">Add to Cart</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="product3.jpg" alt="Product 3">
                </div>
                <div class="product-info">
                    <h3>Gucci Flora Snake Print Silk Shirt</h3>
                    <p class="description">This stylish shirt is made with a soft silk fabric and features a bold Flora Snake print. It also has a classic collar and button-front closure.</p>
                    <p class="price">$100.00</p>
                    <a href="#" class="button">Add to Cart</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="product4.jpg" alt="Product 4">
                </div>
                <div class="product-info">
                    <h3>Gucci Technical Jersey Track Pants</h3>
                    <p class="description">These sporty track pants are made with a comfortable technical jersey fabric and feature a bold Gucci logo stripe detail. They also have an elasticized waistband and zippered pockets.</p>
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
