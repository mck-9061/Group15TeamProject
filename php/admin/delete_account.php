<?php
require 'admin_functions.php';

$name = $_POST["name"];
$success = deleteAccount($name);

if ($success > 0) {
    $_SESSION["message"] = "Account deleted!";
    header("Location: ../../admin/adminAccounts.php");
}
