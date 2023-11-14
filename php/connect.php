<?php
    // Include this file at the top of a PHP file where you need to connect to the database
    try {
        $db = new PDO("mysql:host=localhost;dbname=cadence", "site", "bTqa6BkkjNqho5");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        ?>
        <p>A database error has occurred.</p>
        <p>Details: <em> <?= $ex->getMessage() ?> </em></p>
        <?php
    }
?>