<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['redirect_to'] = basename(__FILE__);
    header("Location: login.php");
    exit;
}

$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';


?>


<!Doctype HTML>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="customer-page.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
    <link rel="icon" type="image" href="../assets/favicon.ico">

</head>


<body id="customer-home">
<?php require 'account_navbar.php' ?>

<div class="text-center">
    <p id="home-title">Welcome, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?></p>

    <p></p>

    <!--
    <div class="">
        <a href="customer-info.php" > Personal Info</a>
        <a href="#" >Address Book </a>

        <br>
        <a href="">Order History</a>
        <button onclick="window.location='../login.php'"> Delete Account</button>

    </div>

    <hr id="invisible-line">
    <hr id="invisible-line">
    <hr>

    <button onclick="window.location='../index.php'"> Go Home</button>
    <button onclick="window.location='../login.php'"> Sign Out</button>

-->
</div>

 <main>
    <div>
        <div class="row">
            <div class="column customer-options text-center align-items-center">
                <div class="card" id="your-info">
                    <h1 class="title">Your Info</h1>
                    <p class="subtitle">Check what we have and what you want us to have</p>
                    <button class="btn" onclick="window.location='dashboard-info.php'">Read your credits</button>
                </div>
            </div>
            <div class="column customer-options text-center">
                <div class="card" id="history">
                    <h1 class="title">Order History</h1>
                    <p class="subtitle">See prior Order History</p>
                    <a href="dashboard-order-history.php" class="btn">Rewind to the past</a>
                </div>
            </div>
        </div>
    </div>
<div>
    <div class="row">
        <div class="column customer-options text-center">
            <div class="card" id="DeleteAcc">
                <h1 class="title">Delete Account</h1>
                <p class="subtitle"> Delete your Account (Dont though we love you to much to lose you!)</p>
                <button class="btn">Button of Regret</button>
            </div>
        </div>
    </div>
</div>
</main>

<footer id="index-footer">
    <div class="footer-top">
        <div class="row">
            <div class="col-lg-3 col-md-6  align-items-center text-center">
                <br>
                <br>
                <a  href="about.php" class="align-items-center" >
                    <img src="../assets/logo.png" width="100px" >
                </a>
                <br>
                <br>

            </div>
            <div class="col-lg-2 col-md-6 footer-links">
                <br>

                <h4 class="text-center" id="footer-useful"> Useful Links</h4>

                <ul class="footer-list">

                    <li>
                        <i class="fa fa"></i>
                        <a href="../index.php" class="footer-items "> Home</a>
                    </li>
                    <li>
                        <i class="fa fa"></i>
                        <a href="../products.php" class="footer-items"> All Products</a>
                    </li>
                    <li>
                        <i class="fa fa"></i>
                        <a href="../about.php" class="footer-items"> Who we are!</a>
                    </li>
                </ul>


            </div>
            <div class="col-lg-2 col-md-6 footer-contact">
                <br>

                <h4 class="text-center" id="footer-contact-us"> Contact Us</h4>
                <ul class="footer-list">

                    <li>
                        <i class="fa fa"></i>
                        <a href="mailto:info@cadence.com" class="footer-items "> Email </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6 footer-contact">
                <br>

                <ul class="footer-list">

                    <li>
                        <i class="fa fa"></i>
                        <div class="footer-items"> 2023 @Copyright Cadence </div>
                    </li>
                </ul>
            </div>

        </div>

</footer>






<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
></script>
<script src="main.js"> </script>
</body>






</html>