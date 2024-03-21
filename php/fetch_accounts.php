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

function getAddress($username) {
    global $db;
    try {

        $query = "
            SELECT * FROM `users` WHERE `username` = :user
        ";

        $statement = $db->prepare($query);
        $statement->bindParam(':user', $username, PDO::PARAM_STR, 20);
        $statement->execute();

        $users = $statement->fetchAll(PDO::FETCH_ASSOC);

        $address = $users[0]['address'];

        if ($address == 0) return "";

        return $users[0]['address'];
    } catch (PDOException $ex) {
        echo "Error: " . $ex->getMessage();
        return [];
    }
}