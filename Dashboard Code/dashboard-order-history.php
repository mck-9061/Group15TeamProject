<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order History</title>
    <link rel="stylesheet" href="order-history-stuff.css">
</head>
<body>
<div class="container">
    <a href="dashboard.php" class="back-button">← Back to Dashboard</a>

    <?php
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['redirect_to'] = basename(__FILE__);
        header("Location: ../login.php");
        exit;
    }

    require '../php/connect.php';

    if (!isset($db)) {
        echo "Failed to connect to the database.";
        exit;
    }

    require '../php/message.php';

    $username = $_SESSION['username'];

    $sql = "SELECT 
            orders.orderid, 
            orders.delivery_method, 
            orders.date, 
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
                    <div class="card-title">Order History</div>
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
                            <a href="dashboard-order-item.php?orderids=<?= $order['order_ids'] ?>&delivery_method=<?= $order['delivery_method'] ?>" class="btn-details">View Order Details</a>
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
            echo "<div class='no-order-message'>You haven't placed any orders yet.</div>";
            echo "</div>";
            echo "</div>";
        }

        $stmt = null;
    }

    $db = null;
    ?>
</div>
</body>
</html>
