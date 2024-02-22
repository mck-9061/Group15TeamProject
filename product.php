
<?php
session_start();

include 'php/fetch_products.php';
include 'php/fetchComments.php';



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
        $comments = fetchComments($selectedProductID);



    } else {

        $productName = 'Product Not Found';
        $productGenre = "Inavlid genre";
        $productPrice = "Invalid price";
        $productDescription = "";
        $productImage = "Inavlid Image";

        $links = array();
        $comments = array();


    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadence | <?php echo $productName; ?></title>    <!--   Change this title with Php to be Cadence | "product name"  -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
    <link rel="icon" type="image" href="assets/favicon.ico">

</head>
<body  id="product-page-body">


<?php require "navbar.php" ?>

<div class="card mx-auto text-center " id="product-page-card">
    <div class="product-container" >
        <h2 id="product-page-product-name"><?php echo $productName; ?></h2>
        <img src="<?php echo $productImage; ?>" id="product-page-img" alt="<?php echo $productName; ?>" width="300" height="300" >
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
            <a href="php/cart/add.php?cb=products&productid=<?php echo $selectedProductID; ?>" class="btn bg-cart" id="add-basket-btn">
                <button class="btn bg-cart" id="product-add-basket-btn"> Add to basket</button>
            </a>
        </div>
    </div>
</div>
<!-- Display comments -->
<div id="comments-section" class="comments-section">
    <h3 class="comments-heading">Comments</h3>
    <?php if (!empty($comments)) { ?>
        <?php foreach ($comments as $comment) { ?>
            <div class="comment">
                <div class="card comment-card">
                    <div class="card-body comment-card-body">
                        <div class="comment-info">
                            <p class="comment-author main-comment-author">Posted by: <?php echo $comment['user']; ?></p>
                            <p class="comment-date">Date: <?php echo date('Y-m-d', strtotime($comment['timestamp'])); ?></p>
                        </div>

                        <p class="comment-content"><?php echo $comment['comment']; ?></p>
                        <?php if (isset($_SESSION['username']) && $_SESSION['username'] === $comment['user']) { ?>
                            <a href="php/delete_comment.php?comment_id=<?php echo $comment['comment_id']; ?>" class="btn btn-danger delete-comment-btn">Delete</a>
                        <?php } ?>
                    </div>
                </div>
            </div>


        <?php } ?>
    <?php } else { ?>
        <p class="no-comments">No comments yet.</p>
    <?php } ?>

    <!-- Add Comment Form -->
    <?php if (isset($_SESSION['username'])) { ?>
        <div class="comment-form">
            <h3>Add a Comment</h3>
            <form action="php/add_comment.php" method="post">
                <input type="hidden" name="productid" value="<?php echo $selectedProductID; ?>">
                <div class="form-group">
                    <label for="comment" class="comment-label">Your Comment</label>
                    <textarea class="form-control comment-input" id="comment" name="comment" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary submit-comment-btn">Submit</button>
            </form>
        </div>
    <?php } else { ?>
        <p class="login-message">Please <a href="login.php">log in</a> to add a comment.</p>
    <?php } ?>
</div>





<div  class="text-center mx-auto rounded-4 " id="continue-shopping-product">
    <a href="products.php" class="text-decoration-none">&leftarrow; Continue Shopping</a></button>


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