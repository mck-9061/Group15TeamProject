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

<div class="text-center">
    <p id="home-title">Welcome,  (Add user's name here + email) </p>

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


    <div  id="account-dashboard-home-left-side" class="col-lg-6">
        <div class="row">
            <div class="column customer-options text-center align-items-center">
                <div class="card">
                    <h1 class="title">Your Info</h1>
                    <p class="subtitle">Check what we have and what you want us to have</p>
                    <button class="btn" onclick="window.location='dashboard-info.php'">Read your credits</button>
                </div>
            </div>
            <div class="column customer-options text-center">
                <div class="card">
                    <h1 class="title">Order History</h1>
                    <p class="subtitle">See prior Order History</p>
                    <button class="btn">Rewind to the past</button>
                </div>
            </div>
        </div>
    </div>
<div  id="account-dashboard-home-right-side" class="col-lg-6">
    <div class="row">
        <div class="column customer-options text-center align-items-center">
            <div class="card">
                <h1 class="title">Your Favourite Genres</h1>
                <p class="subtitle">Check out what your more likely to listen to & what you already have</p>
                <button class="btn" onclick="window.location='dashboard-styles-overview.php'">Explore your style</button>
            </div>
        </div>
        <div class="column customer-options text-center">
            <div class="card">
                <h1 class="title">Delete Account</h1>
                <p class="subtitle"> Delete your Account (Dont though we love you to much to lose you!)</p>
                <button class="btn">Button of Regret</button>
            </div>
        </div>
    </div>
</div>








<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
></script>
<script src="main.js"> </script>
</body>






</html>