<?php
include 'php/fetch_products.php';

?>

<!-- ... All of the HTML Below ... -->
<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Cadence | Products Page</title>
    <link rel="stylesheet" href="css/bootstrap.css" />

    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
    <link rel="icon" type="image" href="assets/favicon.ico">
</head>

<body id="products-page">
<?php require "navbar.php" ?>
<?php include 'php/message.php' ?>
<!--bar underneath nav bar specifying type of product -->


<div class="container mt-5 mb-5">
    <div class="row">
        <?php
        $products = fetchProducts();

        foreach ($products as $product) {
            ?>
            <div class="col-md-3 mb-3">
                <div class="card h-100" id="product-card">
                    <!-- Centering the Image -->
                    <div class="card-body d-flex flex-column align-items-center">
                        <!-- Responsive Image Size -->
                        <a href="product.php?productid=<?php echo $product['productid']; ?>">
                            <img src="<?php echo $product['image-link']; ?>" class="card-img-top" id="product-img" alt="Product Image">
                        </a>

                        <!-- Product Name -->
                        <div class="mt-3 text-center">
                            <h6 class="font-weight-semibold mb-2">
                                <h6 class="font-weight-semibold mb-2">
                                    <a href="product.php?productid=<?php echo $product['productid']; ?>" class="text-default mb-2 text-decoration-none" id="products-names" data-abc="true"><?php echo $product['name']; ?></a>
                                </h6>

                                <!-- Product Genre -->
                                <p id="product-genre" data-abc="true"><?php echo $product['genre']; ?></p>


                                <!-- Product Price -->
                                <h4 class="mb-0 font-weight-semibold" id="product-price"> £<?php echo $product['price']; ?></h4>

                                <!-- Ratings and Reviews -->
                                <!-- Number of Reviews -->
                                <div class=" mb-3" id="product-reviews">Reviews: <?php echo $product['reviews']; ?> </div>

                                <!-- Add to Cart Button -->
                                <a href="php/cart/add.php?cb=products&productid=<?php echo $product['productid']; ?>" class="btn bg-cart" id="add-basket-btn" >
                                    <i class="fa fa-cart-plus mr-2"></i> Add To Basket
                                </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>



<footer id="rest-footer">
    <div class="footer-top">
        <div class="row">
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
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
></script>
<script src="main.js"> </script>
</body>
</html>
