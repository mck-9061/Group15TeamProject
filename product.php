<?php
session_start();

include 'php/fetch_products.php';

// Check if the product ID is set in the URL
if (isset($_GET['productid'])) {
    $selectedProductID = $_GET['productid'];

    // Fetch all products
    $products = fetchProducts();

    // Find the selected product by its ID
    $selectedProduct = null;
    foreach ($products as $product) {
        if ($product['productid'] == $selectedProductID) {
            $selectedProduct = $product;
            break;
        }
    }

    if ($selectedProduct) {

        $productName = $selectedProduct['name'];
        //        $productType = $selectedProduct['genre'];
        $productGenre = $selectedProduct['genre'];
        $productPrice = $selectedProduct['price'];
        $productDescription = $selectedProduct['description'];
        $productImage = $selectedProduct['image-link'];

        $links = fetchLinks($selectedProductID);
    } else {

        $productName = 'Product Not Found';
        $productGenre = "Inavlid genre";
        $productPrice = "Invalid price";
        $productDescription = "";
        $productImage = "Inavlid Image";

        $links = array();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadence | <?php echo $productName; ?></title> <!--   Change this title with Php to be Cadence | "product name"  -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
    <link rel="icon" type="image" href="assets/favicon.ico">

</head>

<body id="product-page-body">


    <?php require "navbar.php" ?>




    <div class="card mx-auto text-center " id="product-page-card">
        <div class="product-container">
            <h2 id="product-page-product-name"><?php echo $productName; ?></h2>
            <img src="<?php echo $productImage; ?>" id="product-page-img" alt="<?php echo $productName; ?>" width="300" height="300">
            <div class="card-body">
                <div class="product-page-info">
                    <p id="product-type"> CD</p>
                    <p id="product-genre"><?php echo $productGenre; ?></p>
                    <p id="product-price"><?php echo $productPrice; ?></p>
                    <p id="product-description"><?php echo $productDescription; ?></p>
                    <?php
                    foreach ($links as $link) {
                    ?>
                        <a id="product-link" href="<?php echo $link['link']; ?>"><?php echo $link['description']; ?></a>
                    <?php
                    }
                    ?>
                </div>
                <a href="php/cart/add.php?cb=products&productid=<?php echo $product['productid']; ?>" class="btn bg-cart" id="add-basket-btn">
                    <button class="btn bg-cart " id="product-add-basket-btn"> Add to basket</button>
            </div>
        </div>
    </div>

    <div class="text-center mx-auto rounded-4 " id="continue-shopping-product">
        <a href="products.php" class="text-decoration-none">&leftarrow; Continue Shopping</a></button>


    </div>
    <?php require "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="main.js"> </script>
</body>

</html>