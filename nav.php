<?php
session_start();
?>
<head>
    <link rel="stylesheet" type="text/css" href="css/nav.css">
</head>
<nav class="navbar background">
    <ul class="nav-list">
        <div class="logo">
            <a href="index.php"><img src="gallery/shoe.jpg"/></a>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Shoes</button>
            <div class="dropdown-content">
                <a href="./Products.php">Nike</a>
                <a href="./Adidas.php">Adidas</a>
                <a href="./hummelshoes.php">Hummel</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Clothes</button>
            <div class="dropdown-content">
                <a href="./gucci.php">Gucci</a>
                <a href="underarmour.php">Under Armour</a>
                <a href="Hummeldress.php">Hummel</a>
            </div>
        </div>
        <li><a href="Aboutus.html">About Us</a></li>
    </ul>
    <?php
    if(isset($_SESSION['uname'])) {
        $uname = $_SESSION['uname'];
        echo "<p id='welcome'>Hello $uname</p>";
        echo "<a href='backend/logout.php' class='btn'>Logout</a>";
        echo "<a href='cart.php' class='btn'>Cart</a>";
     } else {
        ?>
        <form id="login" method="post" action="backend/login.php">
            <input name="username" type='text' placeholder='Username'>
            <input name="pass" type='password' placeholder='Password'>
            <input class="btn" type='submit' value='Login'>
        </form>
        <a href="registration.php" class="btn">Register</a>
    <?php } ?>
    <!--    <div class="rightNav">-->
    <!-- 45455       <input type="text" name="search" id="search">-->
    <!--        <button class="btn btn-sm">Search</button>-->
    <!--    </div>-->
</nav>
