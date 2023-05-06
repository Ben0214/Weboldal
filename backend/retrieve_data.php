<?php

function getProducts($brand)
{
    require 'backend/connect.php';
    $conn = connect();

    $sql = "SELECT id, name, description, price, picture, brand FROM products WHERE brand = '$brand'";
    $result = mysqli_query($conn, $sql);

    echo "<div class='product-grid'>";
    if($result->num_rows > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            $img = "gallery/" . $row["picture"];
            $name = $row["name"];
            $desc = $row["description"];
            $price = $row["price"];
            $id = $row['id'];

            echo "<div class='product-card'>";
            echo "    <div class='product-image'>";
            echo "        <img src='$img' alt='$name'>";
            echo "    </div>";
            echo "    <div class='product-info'>";
            echo "        <h3>$name</h3>";
            echo "        <p class='description'>$desc</p>";
            echo "        <p class='price'>\$$price</p>";
            ?>
            <form id="login" method="post" action="backend/add_to_cart.php">
                <input name="prodId" value="<?php echo $id; ?>" type='text' hidden>
                <input class="btn" type='submit' value='Add to Cart'>
            </form>
            <?php
            echo "    </div>";
            echo "</div>";
        }
    }
    else{
        echo "<p>No products yet!</p>";
    }

    echo "</div>";
}

function getCartContent($username){

    require_once 'connect.php';
    $connect = connect();
    $useridres = mysqli_query($connect, "SELECT id, username FROM users WHERE username = '$username'")->fetch_assoc();
    $userid = $useridres['id'];

    $sql = "SELECT picture, name, price
FROM products INNER JOIN cart ON products.id = cart.productid
WHERE userid = '$userid';";

    $result = mysqli_query($connect, $sql);

    $total = 0;
    $subTotal = 0;
    $taxTotal = 0;

    if($result->num_rows > 0){
        echo "<div class='cart-items'>";
        while ($row = mysqli_fetch_assoc($result)) {
            $img = "gallery/" . $row["picture"];
            $name = $row["name"];
            $price = $row["price"];

            $subTotal += $price;
            $tax = $price * 0.06;
            $taxTotal += $tax;
            $total += $price + $tax;

            echo "<div class='cart-item'>";
            echo "    <img src='$img' alt='$name'>";
            echo "    <div class='item-details'>";
            echo "        <p>Price: \$$price</p>";
            echo "        <h4>$name</h4>";
            echo "    </div>";
            echo "</div>";
        }
        echo "</div>";

        echo "<div class='cart-summary'>";
        echo "<p>Subtotal: \$$subTotal</p>";
        echo "<p>Tax: \$$taxTotal</p>";
        echo "<p>Total: \$$total</p>";
        echo "<a href='checkout.html' class='checkout'>Checkout</a>";
        echo "</div>";
    }
    else{
        echo "<p>No products yet!</p>";
    }


}
