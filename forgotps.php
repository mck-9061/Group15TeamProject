<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadence | Login Page</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
    <link rel="icon" type="image" href="assets/favicon.ico">
</head>
<body id="login-page">
<div class="log-box">
    <span class="LoginBorderLine"></span>
    <form method="post" action="php/reset_password.php">
        <h2>Reset Password</h2>

        <div class="inputBox">
            <input type="text" required="required" name="username" />
            <span>Input your Email</span>
            <i></i>
        </div>

        <div class="extraLogInfo ">

            <a href="signup.php">Sign Up</a>
            <a href="index.php">Go back</a>
        </div>

        <input type="submit" value="Reset" onclick="forgotPs()"/>
    </form>
</div>
</body>

</html>