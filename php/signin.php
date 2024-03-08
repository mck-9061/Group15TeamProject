<?php
include("connect.php");

session_start();

    if (isset($_POST["username"]) and isset($_POST["password"])) {
        try {
            //Query the database
            $stat = $db->prepare('SELECT password FROM users WHERE username = ?');
            $stat->execute(array($_POST['username']));
            //find the row associated to that username
            if ($stat->rowCount() > 0) {
                $row = $stat->fetch();
                //compare the password given to the password in the database
                if (password_verify($_POST['password'], $row['password'])) {
                    $_SESSION['username'] = $_POST['username'];
                    header("Location:../index.php");
                    exit();
                } else {
                    echo "Incorrect password";
                }
            } else {
                echo "Incorrect username";
            }
        } catch (PDOexception $ex) {
            echo "Failed to connect to database.<br>";
            echo($ex->getMessage());
            exit;
        }
}

?>
