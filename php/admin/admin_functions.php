<?php
include("../connect.php");

session_start();

function addProduct($name, $description, $price, $genre, $type, $stock) {
    global $db;
    try {
        $statement = $db->prepare("INSERT INTO `products` (`productid`, `name`, `price`, `description`, `reviews`, `genre`, `type`, `stock`) VALUES (NULL, :name, :price, :description, '0', :genre, :type, :stock);");
        $statement->bindParam(':name', $name, PDO::PARAM_STR, 200);
        $statement->bindParam(':price', $price, PDO::PARAM_STR, 100);
        $statement->bindParam(':description', $description, PDO::PARAM_STR, 1000);
        $statement->bindParam(':genre', $genre, PDO::PARAM_STR, 20);
        $statement->bindParam(':type', $type, PDO::PARAM_STR, 100);
        $statement->bindParam(':stock', $stock, PDO::PARAM_STR, 100);

        $statement->execute();


        // Get the product ID
        $query = '
            SELECT productid
            FROM products
            WHERE name = "' . $name . '"';
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC)[0]['productid'];


    } catch (PDOException $ex) {
        ?>
        <p>(Error details: <?= $ex->getMessage() ?>)</p>
        <?php
        return -1;
    }
}

function addImage($product_id, $image_link) {
    global $db;
    echo $product_id;

    $new_link = str_replace("../../", "", $image_link);

    $statement = $db->prepare("INSERT INTO `product-pictures` (`picture-id`, `productid`, `image-link`) VALUES (NULL, :id, :link);");
    $statement->bindParam(':id', $product_id, PDO::PARAM_STR, 11);
    $statement->bindParam(':link', $new_link, PDO::PARAM_STR, 1000);

    $statement->execute();
}

function addLink($product_id, $link) {
    global $db;
    echo $product_id;

    $statement = $db->prepare("INSERT INTO `external-links` (`productid`, `link`, `description`) VALUES (:id, :link, 'YouTube Link');");
    $statement->bindParam(':id', $product_id, PDO::PARAM_STR, 11);
    $statement->bindParam(':link', $link, PDO::PARAM_STR, 1000);

    $statement->execute();
}



function editProduct($id, $name, $description, $price, $genre, $type, $stock) {
    global $db;
    try {
        $statement = $db->prepare("UPDATE `products` SET `name` = :name, `price` = :price, `description` = :description, `genre` = :genre, `type` = :type, `stock` = :stock WHERE `products`.`productid` = :id; ");
        $statement->bindParam(':name', $name, PDO::PARAM_STR, 200);
        $statement->bindParam(':price', $price, PDO::PARAM_STR, 100);
        $statement->bindParam(':description', $description, PDO::PARAM_STR, 1000);
        $statement->bindParam(':genre', $genre, PDO::PARAM_STR, 20);
        $statement->bindParam(':type', $type, PDO::PARAM_STR, 100);
        $statement->bindParam(':stock', $stock, PDO::PARAM_STR, 100);
        $statement->bindParam(':id', $id, PDO::PARAM_STR, 11);

        $statement->execute();

        return 1;


    } catch (PDOException $ex) {
        ?>
        <p>(Error details: <?= $ex->getMessage() ?>)</p>
        <?php
        return -1;
    }
}

function editAccount($name, $email, $address, $phone) {
    global $db;
    try {
        $statement = $db->prepare("UPDATE `users` SET `username` = :name, `email` = :email, `phone` = :phone, `address` = :address WHERE `users`.`username` = :name; ");
        $statement->bindParam(':name', $name, PDO::PARAM_STR, 20);
        $statement->bindParam(':email', $email, PDO::PARAM_STR, 30);
        $statement->bindParam(':phone', $address, PDO::PARAM_STR, 11);
        $statement->bindParam(':address', $phone, PDO::PARAM_STR, 100);

        $statement->execute();

        return 1;


    } catch (PDOException $ex) {
        ?>
        <p>(Error details: <?= $ex->getMessage() ?>)</p>
        <?php
        return -1;
    }
}

function deleteAccount($name) {
    global $db;
    try {
        $statement = $db->prepare("DELETE FROM users WHERE `users`.`username` = :name");
        $statement->bindParam(':name', $name, PDO::PARAM_STR, 20);

        $statement->execute();

        return 1;


    } catch (PDOException $ex) {
        ?>
        <p>(Error details: <?= $ex->getMessage() ?>)</p>
        <?php
        return -1;
    }
}

function setNewPassword($user, $password) {
    global $db;
    try {
        $statement = $db->prepare("UPDATE `users` SET `password` = :password WHERE `users`.`username` = :name; ");
        $statement->bindParam(':name', $user, PDO::PARAM_STR, 20);
        $hashed = password_hash($password, null);
        $statement->bindParam(':password', $hashed, PDO::PARAM_STR, 1024);

        $statement->execute();

        return 1;


    } catch (PDOException $ex) {
        ?>
        <p>(Error details: <?= $ex->getMessage() ?>)</p>
        <?php
        return -1;
    }
}

function deleteCurrentImage($id) {
    global $db;
    try {
        $statement = $db->prepare("DELETE FROM `product-pictures` WHERE `product-pictures`.`productid` = :id");
        $statement->bindParam(':id', $id, PDO::PARAM_STR, 11);
        $statement->execute();

        return 1;
    } catch (PDOException $ex) {
        ?>
        <p>(Error details: <?= $ex->getMessage() ?>)</p>
        <?php
        return -1;
    }
}

function deleteCurrentLink($id) {
    global $db;
    try {
        $statement = $db->prepare("DELETE FROM `external-links` WHERE `external-links`.`productid` = :id");
        $statement->bindParam(':id', $id, PDO::PARAM_STR, 11);
        $statement->execute();

        return 1;
    } catch (PDOException $ex) {
        ?>
        <p>(Error details: <?= $ex->getMessage() ?>)</p>
        <?php
        return -1;
    }
}