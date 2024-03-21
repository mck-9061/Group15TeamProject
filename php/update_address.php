<?php

function updateAddress($name, $address) {
    global $db;
    try {
        $statement = $db->prepare("UPDATE `users` SET `address` = :address WHERE `users`.`username` = :name; ");
        $statement->bindParam(':address', $address, PDO::PARAM_STR, 100);
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

?>