<?php
session_start();

if(!isset($_SESSION["uname"]))
//    echo "NOT LOGGED IN!!!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Simple web Development Template</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div id="nav"></div>
<script src="main.js"></script>

<section class="firstsection">
    <div class="box-main">
        <div class="firstHalf">
            <h1 class="text-big" id="web">
                Are you interested in shoes?
            </h1>

            <p class="text-small">
               If you're clicked on this website then that means your in need of some really good shoes
                , and today is your lucky day, becasue here we have all kinds of shoes which match your style
                and i'm sure that one of the shoes will surely steal your heart.
            </p>


        </div>
    </div>
</section>

<section class="secondsection">
    <div class="box-main">
        <div class="secondHalf">
            <h1 class="text-big" id="program">
                What is style you ask?
            </h1>
            <p class="text-small">
            Well it's a combination of clothes, that go well together, and it's wise to match it with your
                shoes, because sometimes not all combinations are good combinations.
            </p>


        </div>
    </div>
</section>

<section class="section">
    <div class="paras">
        <h1 class="sectionTag text-big"><a href="">Here are some good examples, if you need reference</a> </h1>

    </div>

    <div class="thumbnail">
        <img src="Style.jpeg" alt="Inspiration">
    </div>
</section>

<footer class="background">
    <p class="text-footer">
        <a href="./Contactus.html">Contact us</a>
    </p>
</footer>
</body>

</html>
