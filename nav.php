<head>
    <link rel="stylesheet" type="text/css" href="css/nav.css">
</head>
<nav class="navbar background">
    <ul class="nav-list">
        <div class="logo">
            <a href="index.php"><img src="shoe.jpg"/></a>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Shoes</button>
            <div class="dropdown-content">
                <a href="./Products.html">Nike</a>
                <a href="./Proba2.html">Adidas</a>
                <a href="./proba3.html">Hummel</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Clothes</button>
            <div class="dropdown-content">
                <a href="./gucci.html">Gucci</a>
                <a href="./Blacksquad.html">Black Squad</a>
                <a href="./hummel.html">Hummel</a>
            </div>
        </div>
        <li><a href="./Aboutus.html">About Us</a></li>
    </ul>
    <?php
    if(isset($_SESSION['uname'])) {
        $uname = $_SESSION['uname'];
        echo "<p>Hello $uname</p>";
     } else {
        ?>
        <form id="login" method="post" action="backend/login.php">
            <input name="username" type='text' placeholder='Username'>
            <input name="pass" type='password' placeholder='Password'>
            <input class="btn" type='submit' value='Login'>
        </form>
    <?php } ?>
    <!--    <div class="rightNav">-->
    <!--        <input type="text" name="search" id="search">-->
    <!--        <button class="btn btn-sm">Search</button>-->
    <!--    </div>-->
</nav>
