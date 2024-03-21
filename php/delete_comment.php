<?php
session_start();

include 'connect.php';

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

if (isset($_GET['comment_id'])) {
    $commentID = $_GET['comment_id'];

    $username = $_SESSION['username'];

    // Check if the comment exists and was posted by the current user
    $stmt = $db->prepare("SELECT user FROM comments WHERE comment_id = :comment_id");
    $stmt->bindParam(':comment_id', $commentID);
    $stmt->execute();
    $comment = $stmt->fetch();

    if ($comment && $comment['user'] === $username) {
        // Delete the comment from the database
        $stmt = $db->prepare("DELETE FROM comments WHERE comment_id = :comment_id");
        $stmt->bindParam(':comment_id', $commentID);
        $stmt->execute();
    }

    // Redirect back to the product page after deleting the comment
    if (isset($_SERVER['HTTP_REFERER'])) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    } else {
        header("Location: ../product.php");
    }
    exit();
} else {
    // Comment ID is not provided, redirect to product page
    header("Location: ../product.php");
    exit();
}
?>
