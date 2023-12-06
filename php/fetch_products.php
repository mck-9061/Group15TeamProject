<?php
include 'connect.php';

function fetchProducts() {
    global $db;

    try {
        $query = "
            SELECT products.*, `product-pictures`.`image-link`
            FROM products
            JOIN `product-pictures` ON products.productid = `product-pictures`.productid
        ";

        $statement = $db->prepare($query);
        $statement->execute();
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    } catch (PDOException $ex) {
        echo "Error: " . $ex->getMessage();
        return [];
    }

}
?>
