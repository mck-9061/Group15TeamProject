<?php
include("connect.php");

session_start();

if (isset($_POST['username']) and isset($_POST['email']) and isset($_POST['phoneNumber'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];

    //checks it the email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = "Invalid email address";
        header("Location: ../signup.php");
        exit;
    }

    // Validate phone number (basic format check)
    if (!preg_match('/^[0-9]{11}$/', $phoneNumber)) {
        $_SESSION['message'] = "Invalid phone number format";
        header("Location: ../signup.php");
        exit;
    }

    if (empty($username) or empty($email) or empty($phoneNumber)) {
        $_SESSION['message'] = "Username/email not given";
        header("Location: ../signup.php");
        exit;
    }

    // Check that passwords match
    if (!($_POST['password'] == $_POST['confirmPassword'])) {
        $_SESSION['message'] = "Passwords do not match!";
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
    // Check that the phone number isn't already in use
    $statement = $db->prepare("SELECT * FROM users WHERE phone=:phone");
    $statement->bindParam(':phone', $phoneNumber, PDO::PARAM_STR, 11);

    $statement->execute();

    if (!empty($statement->fetchAll())) {
        $_SESSION['message'] = "Phone number already in use.";
        header("Location: ../signup.php");
        exit;
    }

} else {
    $_SESSION['message'] = "Username/email/phone number not given";
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
    $statement = $db->prepare("INSERT INTO users VALUES(:username, :email, :phone, 0, :password)");
    $statement->bindParam(':username', $username, PDO::PARAM_STR, 10);
    $statement->bindParam(':password', $password, PDO::PARAM_STR, 1024);
    $statement->bindParam(':email', $email, PDO::PARAM_STR, 100);
    $statement->bindParam(':phone', $_POST['phoneNumber'], PDO::PARAM_STR, 11);

    $statement->execute();

    $_SESSION['message'] = "You have registered successfully. Please log in.";
    header("Location: ../login.php");
} catch (PDOException $ex) {
    ?>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
}