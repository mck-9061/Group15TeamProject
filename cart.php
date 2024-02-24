<!doctype html>
<html lang="en">
<?php session_start() ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadence | Shopping Cart</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
    <link rel="icon" type="image" href="assets/favicon.ico">
    <script type="text/javascript" src="js/cart_price_update.js"></script>
</head>
<body id="shopping-cart-body">
<?php require "navbar.php" ?>

<div class="card" id="shopping-card">
    <div class="row">
        <div class="col-md-8 cart" id="">
            <div class="shopping-title">
                <div class="row">
                    <div class="col" id="shopping-words"><h4><b>Shopping Cart</b></h4></div>
                    <div class="col align-self-center text-right text-muted" id="shopping-words"><!-- Add number of products here --> items</div>
                </div>
            </div>

            <?php
            if (!isset($_SESSION['username'])) {
                ?>
                    <!-- Can someone on frontend make this not look ass lmao -->
                    <div>Please log in to access your cart.</div>
                <?php
            } else {
                require 'php/fetch_cart.php';
                $items = fetchCart();

                if (sizeof($items) == 0) {
                    ?>
                        <div>There are no items in your cart.</div>
                    <?php
                }

                foreach ($items as $item) {
                    ?>

                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" alt="shopping-img" src="<?php echo $item['image-link']; ?>" id="cart-img"/>

                            </div>
                            <div class="col">
                                <div class="row text-muted"><?php echo $item['name']; ?></div>
                                <div class="row"><?php echo $item['genre']; ?></div>
                            </div>
                            <div class="col">
                                <!-- <a href="#">- </a><a href="#" class="border">Quantity</a><a href="#"> +</a> -->
                            </div>
                            <div class="col">&pound;<?php echo $item['price']; ?><span class="close"><a href=<?php echo '"php/cart/remove.php?productid=' . $item['productid'] . '"' ?> >  &#10005;</a> </span></div>
                        </div>
                    </div>

                    <?php
                }
            }
            ?>


         <br>


            <div id="cart-continue-shopping"><a href="products.php">&leftarrow;<span class="">Continue Shopping</span></a></div>
        </div>
        <div class="col-md-4 summary" id="shopping-words">
            <div>
                <h5>
                    <b>Summary</b>
                </h5>
                </div>
            <hr>
            <div class="row">

                <div class="col text-right" id="subtotal">&pound;   <?php echo get_total_price() ?></div>
            </div>
            <form action="php/cart_checkout.php" id="shopping-cart-form" method="post">
                <p>SHIPPING</p>
                <select id="shipping_select" class="rounded-4" onchange="update_cart_price()">
                    <option class="text-muted">Standard Delivery (3-5 working days) - <hr> &pound;5.00</option>
                    <option class="text-muted">Next Day Delivery - &pound;10.00</option>
                </select>

                <p>ENTER CODE</p>
                <input  class="rounded-4" id="cart-discount-input" placeholder="Enter your code">
                <!--    Link to payment page        -->
                <input type="submit" value="CHECKOUT" class="checkoutBtn rounded-2"  />
            </form>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL PRICE</div>
                <div class="col text-right" id="total"></div>
            </div>
        </div>
    </div>

</div>
<footer id="rest-footer">
    <div class="footer-top">
        <div class="row g-0">
            <div class="col-lg-3 col-md-6  align-items-center text-center">
                <br>
                <br>
                <a  href="about.php" class="align-items-center" >
                    <img src="assets/logo.png" width="100px" >
                </a>
                <br>
                <br>

            </div>
            <div class="col-lg-2 col-md-6 footer-links">
                <br>

                <h4 class="text-center" id="footer-useful"> Useful Links</h4>

                <ul class="footer-list">

                    <li>
                        <i class="fa fa"></i>
                        <a href="index.php" class="footer-items "> Home</a>
                    </li>
                    <li>
                        <i class="fa fa"></i>
                        <a href="products.php" class="footer-items"> Products page</a>
                    </li>
                    <li>
                        <i class="fa fa"></i>
                        <a href="about.php" class="footer-items"> Who we are!</a>
                    </li>
                </ul>


            </div>
            <div class="col-lg-2 col-md-6 footer-contact">
                <br>

                <h4 class="text-center" id="footer-contact-us"> Contact Us</h4>
                <ul class="footer-list">

                    <li>
                        <i class="fa fa"></i>
                        <a href="mailto:info@cadence.com" class="footer-items "> Email  <span id="footer-email-color">info@cadence.com </span></a>
                    </li>
                    <li>
                        <i class="fa fa"></i>
                        <a href="#" class="footer-items"> Privacy Policy</a>
                    </li>
                    <li>
                        <i class="fa fa"></i>
                        <a href="#" class="footer-items"> Cookie Policy</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-2 footer-contact">
                <br>

                <h4 class="text-center" id="footer-contact-us"> Legal</h4>

                <ul class="footer-list">

                    <li>
                        <i class="fa fa"></i>
                        <a href="#" class="footer-items "> Modern Slavery Statement</a>
                    </li>
                    <li>
                        <i class="fa fa"></i>
                        <a href="#" class="footer-items"> Privacy Policy</a>
                    </li>
                    <li>
                        <i class="fa fa"></i>
                        <a href="#" class="footer-items"> Cookie Policy</a>
                    </li>
                    <li>
                        <i class="fa fa"></i>
                        <a href="#" class="footer-items"> Terms & Condition</a>
                    </li>
                </ul>

            </div>
        </div>

        <div id="footer-copyright" >
            <h5> 2023 @Copyright Cadence </h5>
        </div>

</footer>

<script>update_cart_price()</script>

<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
></script>
<script src="main.js"></script>
</body>
</html>