<?php
include("connect.php");

session_start();

if(isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
}

function getRandImg($user)
{
    global $db;
    try {
        $idstat = $db->prepare("SELECT productid FROM orders WHERE user=? order by orderid DESC");
        $idstat->bindParam(1, $user, PDO::PARAM_STR);
        $idstat->execute();
        if ($idstat->rowCount() > 0) {
            $pid_row1 = $idstat->fetch();
            $pid1 = $pid_row1['productid'];
            $stat = $db->prepare("SELECT genre FROM products WHERE productid=?");
            $stat->bindParam(1, $pid1, PDO::PARAM_STR);
            $stat->execute();
            $genre_row = $stat->fetch();
            $genre = $genre_row['genre'];
            $srcstat = $db->prepare("SELECT `image_link` FROM `carousel-pictures` WHERE genre=?");
            $srcstat->bindParam(1, $genre, PDO::PARAM_STR);
            $srcstat->execute();
            $src_row = $srcstat->fetch(PDO::FETCH_ASSOC);
            $src = $src_row['image_link'];
            return $src;
        } else {
            return false;
        }
    }
    catch (PDOException $ex) {
        echo "Error loading images: " . $ex->getMessage();
        }
    }

