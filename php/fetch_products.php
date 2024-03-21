<?php
include 'connect.php';

function fetchProducts() {
    global $db;

    try {

        // First check for a search term
        if (isset($_GET["search"])) {

            $query = "
            SELECT products.*, `product-pictures`.`image-link`
            FROM products
            JOIN `product-pictures` ON products.productid = `product-pictures`.productid
            WHERE INSTR(`products`.`name`, ?) > 0
        ";
            $statement = $db->prepare($query);
            $statement->execute(array($_GET["search"]));
            $products = $statement->fetchAll(PDO::FETCH_ASSOC);


        } else {
            $query = "
            SELECT products.*, `product-pictures`.`image-link`
            FROM products
            JOIN `product-pictures` ON products.productid = `product-pictures`.productid
        ";

            if (isset($_GET["genre"]) and isset($_GET["type"])) {
                $query = $query . " WHERE `products`.`genre` = ? AND `products`.`type` = ?";
                $statement = $db->prepare($query);
                $statement->execute(array($_GET["genre"], $_GET["type"]));

            } else if (isset($_GET["genre"])) {
                $query = $query . " WHERE `products`.`genre` = ?";
                $statement = $db->prepare($query);
                $statement->execute(array($_GET["genre"]));

            } else if (isset($_GET["type"])) {
                $query = $query . " WHERE `products`.`type` = ?";
                $statement = $db->prepare($query);
                $statement->execute(array($_GET["type"]));

            } else {
                $statement = $db->prepare($query);
                $statement->execute();
            }


            $products = $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        return $products;
    } catch (PDOException $ex) {
        echo "Error: " . $ex->getMessage();
        return [];
    }

}

function fetchLinks($productid) {
    global $db;

    try {

        $query = "
            SELECT * FROM `external-links` WHERE `productid` = ?
        ";

        $statement = $db->prepare($query);
        $statement->execute(array($productid));

        $links = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $links;
    } catch (PDOException $ex) {
        echo "Error: " . $ex->getMessage();
        return [];
    }
}
?>
