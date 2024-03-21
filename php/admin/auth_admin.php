<?php
if (!$_SESSION['username'] == "admin") {
    header("Location:../index.php");
}