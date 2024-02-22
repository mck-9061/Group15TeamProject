<?php
include 'connect.php';

// Function to fetch comments based on the product ID
function fetchComments($productID) {
    global $db; // Access the database connection object defined in connect.php

    try {
        $query = "SELECT * FROM comments WHERE productid = :productid ORDER BY timestamp DESC";
        $statement = $db->prepare($query);

        $statement->bindParam(':productid', $productID, PDO::PARAM_INT);

        $statement->execute();

        $comments = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $comments;
    } catch (PDOException $ex) {
        echo "Error fetching comments: " . $ex->getMessage();
    }
}
?>
