<?php
include 'connect.php';

function get_total_price($shipping_method = null) {
    global $db;

    try {
        $query = "
            SELECT `cart-items`.*, `products`.price
            FROM `cart-items`
            JOIN `products` ON `cart-items`.productid = `products`.productid
            WHERE user = '" . $_SESSION['username'] ."';
        ";

        $statement = $db->prepare($query);
        $statement->execute();
        $items = $statement->fetchAll(PDO::FETCH_ASSOC);

        $total = 0;

        foreach ($items as $item) {
            $total += $item['price'];
        }

        // Add shipping cost to total price
        if ($shipping_method) {
            if ($shipping_method == 'Standard Delivery') {
                $total += 5.00;
            } else if ($shipping_method == 'Next Day Delivery') {
                $total += 10.00;
            }
        }

        return $total;
    } catch (PDOException $ex) {
        echo "Error: " . $ex->getMessage();
        return [];
    }
}

?>