<?php
include 'connect.php';

function fetchCart() {
    global $db;

    try {
        $query = "
            SELECT `cart-items`.*, `products`.*, `product-pictures`.`image-link`
            FROM `cart-items`
            JOIN `products` ON `cart-items`.productid = `products`.productid
            JOIN `product-pictures` ON `cart-items`.productid = `product-pictures`.productid
            WHERE user = '" . $_SESSION['username'] ."';
        ";

        $statement = $db->prepare($query);
        $statement->execute();
        $items = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $items;
    } catch (PDOException $ex) {
        echo "Error: " . $ex->getMessage();
        return [];
    }

}

function get_total_price() {
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

        return $total;
    } catch (PDOException $ex) {
        echo "Error: " . $ex->getMessage();
        return [];
    }
}

?>
