<?php
require 'admin_functions.php';
include "upload.php";

if (!isset($_POST["ArtName"])
    or !isset($_POST["AlbmName"])
    or !isset($_POST["genres"])
    or !isset($_POST["product-type"])
    or !isset($_POST["description-box"])
    or !isset($_POST["PrdPrice"])
    or !isset($_POST["PrdYTLink"])
    or !isset($_FILES["fileToUpload"]["name"])
    or !isset($_POST["stock"])) {

    $_SESSION["message"] =  "Please fill in all the fields.";
} else {
    $name = $_POST["ArtName"] . " - " . $_POST["AlbmName"];
    $id = addProduct($name, $_POST["description-box"], $_POST["PrdPrice"], $_POST["genres"], $_POST["product-type"], $_POST["stock"]);
    $imageUploaded = upload();
    addImage($id, $imageUploaded);
    addLink($id, $_POST["PrdYTLink"]);
    $_SESSION["message"] = "Product added!";
    header("Location: ../../admin/addProduct.php");
}
