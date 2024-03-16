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
                    if ($_POST['username'] == "admin") {
                        header("Location:../admin/adminHome.php");
                        exit();
                    } else {
                        header("Location:../index.php");
                        exit();
                    }
                } else {
                    $_SESSION['message'] = "Incorrect password";
                    header("Location:../login.php");
                }
            } else {
                $_SESSION['message'] =  "Incorrect username";
                header("Location:../login.php");
            }
        } catch (PDOexception $ex) {
            echo "Failed to connect to database.<br>";
            echo($ex->getMessage());
            exit;
        }
}

?>
