<?php
include("connect.php");

session_start();

require 'update_cart.php';
require 'fetch_cart.php';
$items = fetchCart();
$date = date('y-m-d');


    if(sizeof($items)==0){
        ?>
            <div>Add items to cart to checkout.</div>
        <?php
    }else {
        $statement = $db->prepare("INSERT INTO orders (date, user, productid) VALUES(:date, :user, :productid)");
        foreach($items as $item){
            try {
                $statement = $db->prepare("INSERT INTO orders (date, user, productid) VALUES(:date, :user, :productid)");
                $statement->bindParam(':date', $date, PDO::PARAM_STR, 1024);
                $statement->bindParam(':user', $_SESSION['username'], PDO::PARAM_STR, 20);
                $statement->bindParam(':productid', $item['productid'], PDO::PARAM_STR, 11);
                remove_from_cart($item['productid']);

                $statement->execute();
            }catch (PDOException $ex) {
                ?>
                <p>(Error details: <?= $ex->getMessage() ?>)</p>
                <?php
            }
        }
        $_SESSION['message'] = "Checkout complete. You will recieve a confirmation email soon.";
        header("Location: ../products.php");
    }
