<?php
include("connect.php");

session_start();
require 'cart_functions.php';
require 'update_cart.php';
require 'fetch_cart.php';
$items = fetchCart();
$date = date('y-m-d');

if(sizeof($items)==0){

    $_SESSION['message'] = "Add items to cart to checkout.";
    header("Location: ../products.php");

} else {
    $delivery_method = $_POST['shipping_select'];
    $total_price = get_total_price($delivery_method);

    // First check all items are in stock
    $query = "
            SELECT `cart-items`.*, `products`.`stock`, `products`.`name`
            FROM `cart-items`
            JOIN `products` ON `cart-items`.`productid` = `products`.`productid`
            WHERE `cart-items`.`user` = :username
            AND `products`.`stock` = 0";
    $statement = $db->prepare($query);
    $statement->bindParam(':username', $_SESSION['username'], PDO::PARAM_STR, 20);
    $statement->execute();
    $outOfStock = $statement->fetchAll(PDO::FETCH_ASSOC);

    if ($outOfStock) {
        $message = "Apologies, the following items are out of stock: ";
        foreach ($outOfStock as $item) {
            $message .= $item['name'] . ", ";
            remove_from_cart($item['productid']);
        }

        $_SESSION['message'] = substr($message, 0, -2) . ". Your order has not been processed.";
        header("Location: ../cart.php");
    } else {
        $statement = $db->prepare("INSERT INTO orders (date, user, productid, item_count, delivery_method, total_price) VALUES(:date, :user, :productid, 1, :delivery_method, :total_price)");
        foreach($items as $item){
            try {
                $statement->bindParam(':date', $date, PDO::PARAM_STR, 1024);
                $statement->bindParam(':user', $_SESSION['username'], PDO::PARAM_STR, 20);
                $statement->bindParam(':productid', $item['productid'], PDO::PARAM_STR, 11);
                $statement->bindParam(':delivery_method', $delivery_method, PDO::PARAM_STR, 255); // Bind the delivery method to the query
                $statement->bindParam(':total_price', $total_price, PDO::PARAM_STR, 10); // Bind the total price to the query
                remove_from_cart($item['productid']);
                decreaseStock($item['productid']);

                $statement->execute();
            } catch (PDOException $ex) {
                ?>
                <p>(Error details: <?= $ex->getMessage() ?>)</p>
                <?php
            }
        }
        $_SESSION['message'] = "Checkout complete. You will receive a confirmation email soon.";
        header("Location: ../products.php");
    }
}
?>