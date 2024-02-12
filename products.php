<?php
include 'php/fetch_products.php';

?>

<!-- ... All of the HTML Below ... -->
<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadence | Products Page</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
    <link rel="icon" type="image" href="assets/favicon.ico">
</head>

<body id="products-page">
    <?php require "navbar.php" ?>
    <?php include 'php/message.php' ?>
    <!--bar underneath nav bar specifying type of product -->


    <div class="container d-flex justify-content-center mt-50 mb-50">
        <div class="row">
            <?php
            $products = fetchProducts();

            foreach ($products as $product) {
            ?>
                <div class="col-md-3 mt-2">
                    <div class="card" id="product-card">
                        <!-- Centering the Image -->
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <!-- Fixed Image Size -->
                            <a href="product.php?productid=<?php echo $product['productid']; ?>">
                                <img src="<?php echo $product['image-link']; ?>" class="card-img-top" id="product-img" alt="Product Image" style="width: 100%; height: 100%;">
                            </a>
                        </div>

                        <div class="card-body text-center" id="card-body">
                            <div class="mb-2">
                                <!-- Product Name -->
                                <h6 class="font-weight-semibold mb-2">
                                    <a href="product.php?productid=<?php echo $product['productid']; ?>" class="text-default mb-2 text-decoration-none" id="products-names" data-abc="true"><?php echo $product['name']; ?></a>
                                </h6>

                                <!-- Product Genre -->
                                <p id="product-genre" data-abc="true"><?php echo $product['genre']; ?></p>
                            </div>

                            <!-- Product Price -->
                            <h4 class="mb-0 font-weight-semibold" id="product-price"> £<?php echo $product['price']; ?></h4>

                            <!-- Ratings and Reviews -->
                            <!-- Number of Reviews -->
                            <div class=" mb-3" id="product-reviews">Reviews: <?php echo $product['reviews']; ?> </div>

                            <!-- Add to Cart Button -->
                            <a href="php/cart/add.php?cb=products&productid=<?php echo $product['productid']; ?>" class="btn bg-cart" id="add-basket-btn">
                                <i class="fa fa-cart-plus mr-2"></i> Add To Basket
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>



    <?php require "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="main.js"> </script>
</body>

</html>