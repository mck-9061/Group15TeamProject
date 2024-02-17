<!Doctype HTML>
<html lang="en">

<head>

   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Home</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
    />
    <link rel="stylesheet" href="admin.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
    <link rel="icon" type="image" href="assets/favicon.ico">

</head>

<body id="admin-home">


<div class="card hero-card-home">
 <p id="home-title">Welcome to Cadence Admin Panel</p>
<p>Panel access</p>
    <div class="hero-card-links">
        <a href="adminAccounts.php" > Manage Accounts</a>
   <a href="adminProducts.php" > Manage Products</a>
    <a href="index.php" > Cadence public Home</a>
        <br>
        <a href="addProduct.php">Add a Product</a>
    </div>

    <hr id="invisible-line">
    <hr id="invisible-line">
    <hr>

    <button onclick="window.location='adminsAccount.php'"> View Admin Account</button>
    <button onclick="window.location='login.php'"> Sign Out</button>

</div>










<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
></script>
<script src="main.js"> </script>
</body>






</html>