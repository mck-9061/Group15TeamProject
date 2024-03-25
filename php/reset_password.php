<?php
session_start();
$_SESSION['message'] = "If an account with that email exists, it has been sent a password reset link.";
header("Location:../login.php");