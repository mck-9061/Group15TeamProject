<?php
session_start();


include 'connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_SESSION['username'])) {
        $user = $_SESSION['username'];
        $productID = $_POST['productid'];
        $comment = $_POST['comment'];

        // Insert comment into the database
        try {
            $stmt = $db->prepare("INSERT INTO comments (productid, user, comment) VALUES (:productid, :user, :comment)");
            $stmt->bindParam(':productid', $productID);
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':comment', $comment);
            $stmt->execute();
            // Redirect back to the product page after adding the comment
            header("Location: ../product.php?productid=" . $productID);
            exit();
        } catch (PDOException $ex) {

            echo "An error occurred while adding the comment: " . $ex->getMessage();
        }
    } else {
        // User is not logged in, handle accordingly (e.g., redirect to login page)
        header("Location: ../login.php");
        exit();
    }
} else {

        echo "Error: This page only accepts POST requests.";

}
?>
