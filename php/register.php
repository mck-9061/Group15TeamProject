<?php
include("connect.php");

session_start();

if (isset($_POST['username']) and isset($_POST['email'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];

    if (empty($username) or empty($email)) {
        $_SESSION['message'] = "Username/email not given";
        header("Location: ../signup.php");
        exit;
    }

    // Check that the username isn't already in use
    $statement = $db->prepare("SELECT * FROM users WHERE username=:username");
    $statement->bindParam(':username', $username, PDO::PARAM_STR, 10);

    $statement->execute();

    if (!empty($statement->fetchAll())) {
        $_SESSION['message'] = "Username already in use.";
        header("Location: ../signup.php");
        exit;
    }

    // Check that the email isn't already in use
    $statement = $db->prepare("SELECT * FROM users WHERE email=:email");
    $statement->bindParam(':email', $email, PDO::PARAM_STR, 100);

    $statement->execute();

    if (!empty($statement->fetchAll())) {
        $_SESSION['message'] = "Email already in use.";
        header("Location: ../signup.php");
        exit;
    }

} else {
    $_SESSION['message'] = "Username/email not given";
    header("Location: ../signup.php");
    exit;
}

if (!empty(trim($_POST['password']))) {
    $password = password_hash($_POST['password'], null);
} else {
    $_SESSION['message'] = "Password not given";
    header("Location: ../signup.php");
    exit;
}


// Insert into database
try {
    $statement = $db->prepare("INSERT INTO users VALUES(:username, :email, 2, 7, :password, 'sdsld')");
    $statement->bindParam(':username', $username, PDO::PARAM_STR, 10);
    $statement->bindParam(':password', $password, PDO::PARAM_STR, 64);
    $statement->bindParam(':email', $email, PDO::PARAM_STR, 100);

    $statement->execute();

    $_SESSION['message'] = "You have registered successfully. Please log in.";
    header("Location: ../login.php");
} catch (PDOException $ex) {
    ?>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
}