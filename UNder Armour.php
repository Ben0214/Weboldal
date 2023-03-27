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
        <h2>Under Armour Products</h2>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="product1.jpg" alt="Product 1">
                </div>
                <div class="product-info">
                    <h3>Under Armour Men's MK1 Short Sleeve Shirt</h3>
                    <p class="description">This training shirt features a lightweight and breathable fabric with a classic fit. It also has moisture-wicking technology to keep you dry and comfortable during workouts.</p>
                    <p class="price">$50.00</p>
                    <a href="#" class="button">Add to Cart</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="product2.jpg" alt="Product 2">
                </div>
                <div class="product-info">
                    <h3>Under Armour Men's Rival Fleece Joggers</h3>
                    <p class="description">These comfortable joggers are made with a soft, mid-weight fleece fabric and a relaxed fit. They also have a ribbed waistband and cuffs for a secure fit.</p>
                    <p class="price">$75.00</p>
                    <a href="#" class="button">Add to Cart</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="product3.jpg" alt="Product 3">
                </div>
                <div class="product-info">
                    <h3>Under Armour Women's Tech Twist Tank Top</h3>
                    <p class="description">This athletic tank top is made with a soft and lightweight fabric with a relaxed fit. It also features moisture-wicking technology to keep you cool and dry during workouts.</p>
                    <p class="price">$100.00</p>
                    <a href="#" class="button">Add to Cart</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="product4.jpg" alt="Product 4">
                </div>
                <div class="product-info">
                    <h3>Under Armour Men's Storm Armour Fleece Hoodie</h3>
                    <p class="description">This comfortable hoodie is made with a durable water-resistant finish to keep you dry during inclement weather. It also features a soft and warm fleece lining for added comfort.</p>
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
