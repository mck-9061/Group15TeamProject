<?php
include 'connect.php';
function fetchAccounts() {
    global $db;

    try {

        $query = "
            SELECT * FROM `users`
        ";

        $statement = $db->prepare($query);
        $statement->execute();

        $users = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $users;
    } catch (PDOException $ex) {
        echo "Error: " . $ex->getMessage();
        return [];
    }
}