<?php
require 'admin_functions.php';

if (!isset($_POST["email"])
    or !isset($_POST["address"])
    or !isset($_POST["phone"])) {

    $_SESSION["message"] =  "Please fill in all the fields.";
} else {
    $name = $_POST["name"];
    $success = editAccount($name, $_POST["email"], $_POST["phone"], $_POST["address"]);

    if (isset($_POST['passReset']) and $_POST['passReset'] != "") {
        setNewPassword($name, $_POST['passReset']);
    }

    if ($success > 0) {
        $_SESSION["message"] = "Details updated!";
        header("Location: ../../account/dashboard-info.php");
    }
}
