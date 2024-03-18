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
    $orderid = $_GET['orderid'];

    // Define delivery fees based on delivery method
    $delivery_fees = [
        'Standard Delivery' => 5.00,
        'Next Day Delivery' => 10.00,
        // Add more delivery methods and their fees as needed
    ];

    $sql = "SELECT orders.orderid, orders.date, orders.delivery_method, products.price, products.currency, products.name, products.description, products.type, `product-pictures`.`image-link`, orders.item_count
FROM orders
INNER JOIN products ON orders.productid = products.productid
INNER JOIN `product-pictures` ON products.productid = `product-pictures`.productid
WHERE orders.user = ? AND orders.orderid = ?
ORDER BY orders.date DESC";

    if ($stmt = $db->prepare($sql)) {
        $stmt->bindParam(1, $username);
        $stmt->bindParam(2, $orderid);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    ?>
    <?php foreach ($result as $order): ?>
        <!-- Merged Card for Order Number, Order Date and Price Process -->
        <div class="card">
            <h2>Order Details</h2>
            <div class="card-content">
                <div class="order-details-block">
                    <p>Order Number: <?= $order['orderid'] ?></p>
                    <p>Order Date: <?= $order['date'] ?></p>
                </div>
                <div class="price-process-block">
                    <?php
                    $item_subtotal = $order['price'] * $order['item_count'];
                    $delivery_fee = isset($delivery_fees[$order['delivery_method']]) ? $delivery_fees[$order['delivery_method']] : 0.00;
                    $total_price_with_delivery = $item_subtotal + $delivery_fee;
                    ?>
                    <p>Item Subtotal: <?= $order['currency'] . number_format($item_subtotal, 2) ?></p>
                    <p>Delivery Fee: <?= $order['currency'] . number_format($delivery_fee, 2) ?></p>
                    <p>Total Price: <?= $order['currency'] . number_format($total_price_with_delivery, 2) ?></p>
                </div>
            </div>

            <div class="card-middle">
                <div class="card-shipping">
                    <h2>Shipping Info</h2>
                    <p>Shipping To: <?= $username ?></p>
                    <p>Phone Number: 0123456789</p> <!-- Placeholder -->
                    <p>Email: example@example.com</p> <!-- Placeholder -->
                    <p>Shipping Method: <?= $order['delivery_method'] ?></p>
                    <p>Address: 123 Street, City, Country</p> <!-- Placeholder -->
                </div>

                <div class="card-billing">
                    <h2>Billing Info</h2>
                    <p>Billing To: <?= $username ?></p>
                    <p>Address: 123 Street, City, Country</p> <!-- Placeholder -->
                    <p>Payment Method: Credit Card</p> <!-- Placeholder -->
                </div>
            </div>

            <div class="card-bottom">
                <h2>Item Summary</h2>
                <div class="item-details">
                    <?php
                    $image = '../' . $order['image-link']; // Modify the image path
                    ?>
                    <img src="<?= $image ?>" alt="Product Image" class="small-product-image">
                    <div class="item-info">
                        <p> <?= $order['name'] ?></p>
                        <p> <?= $order['type'] ?></p>
                        <p>Quantity: <?= $order['item_count'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
