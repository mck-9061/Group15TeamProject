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
        $idstat = $db->prepare("SELECT productid FROM orders WHERE username=? order by orderid DESC");
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
            $pstat = $db->prepare("SELECT productid FROM products WHERE genre=? order by RAND()");
            $pstat->bindParam(1, $genre, PDO::PARAM_STR);
            $pstat->execute();
            $pid_row2 = $pstat->fetch();
            $pid2 = $pid_row2['productid'];
            $srcstat = $db->prepare("SELECT `image_link` FROM `caro-images` WHERE productid=?");
            $srcstat->bindParam(1, $pid2, PDO::PARAM_INT);
            $srcstat->execute();
            $src_row = $srcstat->fetch(PDO::FETCH_ASSOC);
            $src = $src_row['image-link'];
            return $src;
        } else {
            $ordered = false;
            return $ordered;
        }
    }
    catch (PDOException $ex) {
        echo "Error loading images: " . $ex->getMessage();
        }
    }

