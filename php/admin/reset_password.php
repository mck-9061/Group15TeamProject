<?php
require 'admin_functions.php';

if (!isset($_POST["password"])) {

    $_SESSION["message"] =  "Please fill in all the fields.";
} else {
    $name = $_POST["name"];
    $success = setNewPassword($name, $_POST['password']);

    if ($success > 0) {
        $_SESSION["message"] = "Password updated!";
        header("Location: ../../admin/adminAccounts.php");
    }
}
