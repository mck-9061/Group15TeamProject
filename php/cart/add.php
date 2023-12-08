<?php

require '../update_cart.php';

$success = add_to_cart($_GET['productid']);

if ($success == 1) {
    $_SESSION['message'] = 'Product was added to your cart!';
} else if ($success == -2) {
    $_SESSION['message'] = 'Please log in to add items to your cart.';
} else {
    $_SESSION['message'] = 'There was a problem adding this item to your cart, please try again later.';
}

if ($_GET['cb'] == "products") {
    header("Location:../../products.php");
} else {
    header("Location:../../product.php?id=" . $_GET['refer']);
}
