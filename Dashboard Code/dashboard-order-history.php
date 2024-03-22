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

    $sql = "SELECT orders.orderid, orders.productid, orders.date, orders.delivery_method, GROUP_CONCAT(products.name SEPARATOR ', ') as product_names, GROUP_CONCAT(`product-pictures`.`image-link` SEPARATOR ', ') as product_images, GROUP_CONCAT(orders.item_count SEPARATOR ', ') as item_counts, SUM(orders.item_count) as total_items, SUM(orders.total_price) as total_price
    FROM orders
    INNER JOIN products ON orders.productid = products.productid
    INNER JOIN `product-pictures` ON products.productid = `product-pictures`.productid
    WHERE orders.user = ?
    GROUP BY orders.orderid
    ORDER BY orders.total_price DESC, orders.date DESC";

    if ($stmt = $db->prepare($sql)) {
        $stmt->bindParam(1, $username);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $index => $order) {
            ?>
            <div class="card">
                <div class="card-title">Order History</div>
                <div class="card-content">
                    <div class="card-body-left">
                        <div class="order-details">
                            <div class="order-label">Order Number:</div>
                            <div class="order-value"><?= $order['orderid'] ?></div>
                        </div>
                        <div class="order-details">
                            <div class="order-label">Order Date:</div>
                            <div class="order-value"><?= $order['date'] ?></div>
                        </div>
                        <div class="order-details">
                            <div class="order-label">Delivery Method:</div>
                            <div class="order-value"><?= $order['delivery_method'] ?></div>
                        </div>
                    </div>
                    <div class="card-body-right">
                        <?php
                        $product_names = explode(', ', $order['product_names']);
                        $product_images = explode(', ', $order['product_images']);
                        foreach ($product_images as $index => $image): ?>
                            <div class="item-details">
                                <div class="item-label"><?= $product_names[$index] ?></div>
                                <?php
                                $image = '../' . $image; // Modify the image path
                                ?>
                                <img src="<?= $image ?>" alt="Product Image" class="product-image">
                            </div>
                        <?php endforeach; ?>
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
                        <a href="dashboard-order-item.php?orderid=<?= $order['orderid'] ?>" class="btn-details">View Order Details</a>
                    </div>
                </div>
            </div>
            <?php
        }

        $stmt = null;
    }

    $db = null;
    ?>
</div>
</body>
</html>
