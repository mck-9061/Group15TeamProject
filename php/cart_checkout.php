<?php
include("connect.php");

session_start();
require 'cart_functions.php';
require 'update_cart.php';
require 'fetch_cart.php';
$items = fetchCart();
$date = date('y-m-d');

if(sizeof($items)==0){
    ?>
    <div>Add items to cart to checkout.</div>
    <?php
} else {
    $delivery_method = $_POST['shipping_select'];
    $total_price = get_total_price($delivery_method);
    $statement = $db->prepare("INSERT INTO orders (date, user, productid, item_count, delivery_method, total_price) VALUES(:date, :user, :productid, 1, :delivery_method, :total_price)");
    foreach($items as $item){
        try {
            $statement->bindParam(':date', $date, PDO::PARAM_STR, 1024);
            $statement->bindParam(':user', $_SESSION['username'], PDO::PARAM_STR, 20);
            $statement->bindParam(':productid', $item['productid'], PDO::PARAM_STR, 11);
            $statement->bindParam(':delivery_method', $delivery_method, PDO::PARAM_STR, 255); // Bind the delivery method to the query
            $statement->bindParam(':total_price', $total_price, PDO::PARAM_STR, 10); // Bind the total price to the query
            remove_from_cart($item['productid']);

            $statement->execute();
        } catch (PDOException $ex) {
            ?>
            <p>(Error details: <?= $ex->getMessage() ?>)</p>
            <?php
        }
    }
    $_SESSION['message'] = "Checkout complete. You will recieve a confirmation email soon.";
    header("Location: ../products.php");
}
?>