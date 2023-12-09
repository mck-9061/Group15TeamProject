<?php
include 'connect.php';
session_start();

function add_to_cart($productid) {
    global $db;
    if (!isset($_SESSION['username'])) return -2;
    try {
        $query = "
            INSERT INTO `cart-items` (`user`, `productid`)
            VALUES ('" . $_SESSION['username'] . "', " . $productid . ")
        ";

        $statement = $db->prepare($query);
        $statement->execute();

        return 1;


    } catch (PDOException $ex) {
        echo "Error: " . $ex->getMessage();
        return -1;
    }
}

function remove_from_cart($productid) {
    global $db;
    try {
        $query = "
            DELETE FROM `cart-items`
            WHERE `cart-items`.`productid` = " . $productid . "
            AND `cart-items`.`user` = '" . $_SESSION["username"] . "'
        ";

        //echo $query;

        $statement = $db->prepare($query);
        $statement->execute();

        return 1;


    } catch (PDOException $ex) {
        echo "Error: " . $ex->getMessage();
        return -1;
    }
}
?>
