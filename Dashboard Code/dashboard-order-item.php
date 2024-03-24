<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit;
}

require '../php/connect.php';

if (!isset($db)) {
    die("Failed to connect to the database.");
}

require '../php/message.php';

$username = $_SESSION['username'];
$orderids = isset($_GET['orderids']) ? explode(',', $_GET['orderids']) : [];
$delivery_method = isset($_GET['delivery_method']) ? $_GET['delivery_method'] : '';

if (!empty($orderids) && $delivery_method !== '') {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Order Details</title>
        <link rel="stylesheet" href="dashboard-order-item.css">
    </head>
    <body>
    <div class="container">
        <a href="dashboard-order-history.php" class="back-button">← Back to Order History</a>
        <div class="card">
            <h2>Order Details</h2>
            <div class="price-process-block">
                <?php
                // Initialize total item subtotal
                $total_item_subtotal = 0;

                // Calculate total item subtotal
                foreach ($orderids as $orderid) {
                    $sql = "SELECT orders.orderid, orders.date, products.price, products.name, products.description, products.type, `product-pictures`.`image-link`, orders.item_count, users.address, users.email, users.phone
                            FROM orders
                            INNER JOIN products ON orders.productid = products.productid
                            INNER JOIN `product-pictures` ON products.productid = `product-pictures`.productid
                            INNER JOIN users ON orders.user = users.username
                            WHERE orders.orderid = ?
                            AND orders.user = ?
                            ORDER BY orders.date DESC";

                    if ($stmt = $db->prepare($sql)) {
                        $stmt->bindParam(1, $orderid);
                        $stmt->bindParam(2, $username);
                        $stmt->execute();
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);

                        if ($result) {
                            // Calculating total item subtotal
                            $item_subtotal = $result['price'] * $result['item_count'];
                            $total_item_subtotal += $item_subtotal;
                        } else {
                            echo "No orders found.";
                        }
                    } else {
                        echo "Failed to prepare the SQL statement.";
                    }
                }
                ?>
                <p>Total Item Subtotal: £<?= number_format($total_item_subtotal, 2) ?></p>
                <?php
                // Calculate delivery fee and total price with delivery
                $delivery_fee = ($delivery_method === 'Next Day Delivery') ? 10.00 : 5.00;
                $total_price_with_delivery = $total_item_subtotal + $delivery_fee;
                ?>
                <p>Delivery Fee: £<?= number_format($delivery_fee, 2) ?></p>
                <p>Total Price (including delivery): £<?= number_format($total_price_with_delivery, 2) ?></p>
            </div>
            <div class="card-content">
                <h3>Item Summary</h3> <!-- Add Item Summary title here -->
                <?php
                $first_item = true; // To prevent adding a horizontal line before the first item
                foreach ($orderids as $orderid) {
                    $sql = "SELECT orders.orderid, orders.date, products.price, products.name, products.description, products.type, `product-pictures`.`image-link`, orders.item_count, users.address, users.email, users.phone
                            FROM orders
                            INNER JOIN products ON orders.productid = products.productid
                            INNER JOIN `product-pictures` ON products.productid = `product-pictures`.productid
                            INNER JOIN users ON orders.user = users.username
                            WHERE orders.orderid = ?
                            AND orders.user = ?
                            ORDER BY orders.date DESC";

                    if ($stmt = $db->prepare($sql)) {
                        $stmt->bindParam(1, $orderid);
                        $stmt->bindParam(2, $username);
                        $stmt->execute();
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);

                        if ($result) {
                            // Displaying item summary here
                            if (!$first_item) {
                                echo '<hr>'; // Add horizontal line between items
                            } else {
                                $first_item = false;
                            }
                            ?>
                            <div class="order-details-block">
                                <img src="<?= '../' . $result['image-link'] ?>" alt="Product Image" class="small-product-image">
                                <div class="item-info">
                                    <p>Product Name: <?= $result['name'] ?></p>
                                    <p>Product Type: <?= $result['type'] ?></p>
                                    <p>Quantity: <?= $result['item_count'] ?></p>
                                    <p>Price: £<?= number_format($result['price'], 2) ?></p>
                                </div>
                            </div>
                            <?php
                        } else {
                            echo "No orders found.";
                        }
                    } else {
                        echo "Failed to prepare the SQL statement.";
                    }
                }
                ?>
            </div>
        </div>

        <div class="card card-shipping">
            <h2>Shipping Information</h2>
            <div class="card-content">
                <p>Shipping Address: <?= $result['address'] ?></p>
            </div>
        </div>

        <div class="card card-billing">
            <h2>Billing Information</h2>
            <div class="card-content">
                <p>Email: <?= $result['email'] ?></p>
                <p>Phone: <?= $result['phone'] ?></p>
            </div>
        </div>
    </div>
    </body>
    </html>
    <?php
} else {
    echo "No order IDs provided or delivery method not specified.";
}
?>
