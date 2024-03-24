<?php
require 'admin_functions.php';

$name = $_POST["name"];
$success = deleteAccount($name);

if ($success > 0) {
    // Clear all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    session_start();

    $_SESSION["message"] = "Account deleted - we're sorry to see you go.";
    header("Location: ../../index.php");
}
