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
    <link rel="icon" type="image" href="assets/favicon.ico">

</head>

<body id="customer-home">

<?php require "../navbar.php" ?>
<div class="card hero-card-home">
    <p id="home-title">Welcome,  (Add user's name here + email) </p>

    <p></p>
    <div class="hero-card-links">
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


</div>










<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
></script>
<script src="main.js"> </script>
</body>






</html>