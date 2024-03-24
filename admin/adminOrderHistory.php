<!Doctype HTML>
<html lang="en">
<?php
include '../php/fetch_accounts.php';
session_start();
require "../php/message.php";
require "../php/admin/auth_admin.php";

if (!isset($_GET['user'])) {
    header("Location:adminAccounts.php");
}
?>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Products</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="../account/order-history-stuff.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
    <link rel="icon" type="image" href="../assets/favicon.ico">

</head>




<body id="admin-products">

<div class="headers">
    <h1 id="product-type-statement" class="text-center text-uppercase" style="color: white">Order History: <?= $_GET['user'] ?></h1>

    <div class="container">
        <a href="adminCustomerAccountView.php?user=<?= $_GET['user'] ?>" class="back-button">← Back to User</a>

        <?php

        require '../php/connect.php';

        if (!isset($db)) {
            echo "Failed to connect to the database.";
            exit;
        }

        require '../php/message.php';

        $username = $_GET['user'];

        $sql = "SELECT 
            orders.orderid, 
            orders.delivery_method, 
            orders.date,
            users.address,
            GROUP_CONCAT(orders.orderid SEPARATOR ', ') as order_ids, 
            MIN(orders.date) as min_date, 
            MAX(orders.date) as max_date, 
            GROUP_CONCAT(products.name SEPARATOR ', ') as product_names, 
            GROUP_CONCAT(`product-pictures`.`image-link` SEPARATOR ', ') as product_images, 
            GROUP_CONCAT(orders.item_count SEPARATOR ', ') as item_counts, 
            SUM(products.price * orders.item_count) AS total_item_price,
            (SUM(products.price * orders.item_count) + 
                CASE
                    WHEN orders.delivery_method = 'Standard Delivery' THEN 5
                    WHEN orders.delivery_method = 'Next Day Delivery' THEN 10
                    ELSE 0
                END) AS total_price
        FROM orders
        INNER JOIN products ON orders.productid = products.productid
        INNER JOIN `product-pictures` ON products.productid = `product-pictures`.productid
        INNER JOIN users ON orders.user = users.username
        WHERE orders.user = ?
        GROUP BY orders.delivery_method, orders.date
        ORDER BY orders.date DESC";

        if ($stmt = $db->prepare($sql)) {
            $stmt->bindParam(1, $username);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($result) > 0) {
                foreach ($result as $index => $order) {
                    ?>
                    <div class="card">
                        <div class="card-title">Order</div>
                        <div class="card-content">
                            <div class="card-body-left">
                                <div class="order-details">
                                    <div class="order-label">Order Number:</div>
                                    <div class="order-value"><?= count(explode(',', $order['order_ids'])) ?></div>
                                </div>
                                <div class="order-details">
                                    <div class="order-label">Delivery Method:</div>
                                    <div class="order-value"><?= $order['delivery_method'] ?></div>
                                </div>
                                <div class="order-details">
                                    <div class="order-label">Order Date:</div>
                                    <div class="order-value"><?= $order['min_date'] == $order['max_date'] ? $order['min_date'] : $order['min_date'] . ' - ' . $order['max_date'] ?></div>
                                </div>
                                <div class="order-details">
                                    <div class="order-label">Address:</div>
                                    <div class="order-value"><?= $order['address'] ?></div>
                                </div>
                            </div>
                            <div class="card-body-right">
                                <?php
                                $product_names = explode(', ', $order['product_names']);
                                $product_images = explode(', ', $order['product_images']);
                                $item_counts = explode(', ', $order['item_counts']);
                                ?>
                                <div class="item-details">
                                    <?php for ($i = 0; $i < count($product_names); $i++): ?>
                                        <div class="item-label"><?= $product_names[$i] ?></div>
                                        <?php
                                        $image = '../' . $product_images[$i]; // Modify the image path
                                        ?>
                                        <img src="<?= $image ?>" alt="Product Image" class="product-image">
                                        <div class="item-count">Quantity: <?= $item_counts[$i] ?></div>
                                    <?php endfor; ?>
                                </div>
                                <div class="price-details">
                                    <div class="price-label">Total Price:</div>
                                    <div class="price-value">
                                        <?php
                                        if ($order['total_price'] == 0) {
                                            echo "Total price is 0. Please check the price and item_count in the database.";
                                        } else {
                                            echo "£" . $order['total_price'];
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                // Display message for users with no orders
                echo "<div class='no-order-card'>";
                echo "<div class='card-title'>Order History</div>";
                echo "<div class='no-order-card-content'>";
                echo "<div class='no-order-message'>No orders placed by user.</div>";
                echo "</div>";
                echo "</div>";
            }

            $stmt = null;
        }

        $db = null;
        ?>
    </div>
    <script src="../main.js"> </script>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>