<?php
require 'admin_functions.php';

if (!isset($_POST["ArtName"])
    or !isset($_POST["AlbmName"])
    or !isset($_POST["genres"])
    or !isset($_POST["product-type"])
    or !isset($_POST["description-box"])
    or !isset($_POST["PrdPrice"])
    or !isset($_POST["PrdYTLink"])
    or !isset($_FILES["fileToUpload"]["name"])) {

    echo "fill in all the fields you fucking idiot";
} else {
    $name = $_POST["ArtName"] . " - " . $_POST["AlbmName"];
    $id = addProduct($name, $_POST["description-box"], $_POST["PrdPrice"], $_POST["genres"], $_POST["product-type"]);
    include "../upload.php";
    $imageUploaded = upload();
    addImage($id, $imageUploaded);
    $_SESSION["message"] = "Product added!";
    header("Location: ../../addProduct.php");
}
