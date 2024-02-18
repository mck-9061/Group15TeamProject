<?php

// Start the session
session_start();


if (!isset($_SESSION['username'])) {

    header("Location:../index.php");
    exit();
}

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();


header("Location: ../index.php");
exit();


?>