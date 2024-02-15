<!Doctype HTML>
<html lang="en">

<head>

   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Products</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="admin.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
    <link rel="icon" type="image" href="assets/favicon.ico">

</head>

<body id="admin-home">
<div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar" aria-labelledby="offcanvasLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLabel">Cadence-Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <ul class="sidebar-content">

        <li>
            <i class="fa fa"></i>
            <a href="adminHome.php" class="sidebar-item"> Admin Home</a>
        </li>
        <li>
            <i class="fa fa"></i>
            <a href="adminAccounts.php" class="sidebar-item"> Manage Accounts</a>
        </li>
        <li>
            <i class="fa fa"></i>
            <a href="adminProducts.php" class="sidebar-item is-active"> Manage Products</a>
        </li>
        <li>
            <i class="fa fa"></i>
            <a href="index.php" class="sidebar-item"> Website Home page</a>
        </li>
    </ul>


</div>

<a class="btn btn-primary py-2 d-md-grid" data-bs-toggle="offcanvas" href="#sidebar" role="button" id="admin-options-panel" aria-controls="offcanvasExample">
   Admin List (Click on)
</a>
<div class="headers">
<h1 id="product-type-statement" class="text-center text-uppercase">Products Type</h1> <!--Specifiy what products are listed i.e. vinyl,cd etc. -->
    <div class="dropdown text-center">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Genre Picker
            <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Pop</a></li>
            <li><a href="#">Rock</a></li>
            <li><a href="#">KPop</a></li>
        </ul>
    </div>


</div>
<div class="container py-5">
    <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-4 py-5">
        <div class="col">
            <div class="card" style="width: 16rem">
                <img src="assets/TaylorSwift-1989TaylorsVersion-Product-pop.png" style="width: 100%" height="100%" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Artist Name</h5>  <!-- Artist Name  -->
                        <h6 class="card-subtitle">Album Name</h6> <!-- Album Name -->
                        <h6 class="card-subtitle">Genre</h6> <!-- Product Genre -->
                        <p class="card-text">Lorem Ipsom</p> <!-- Product Description -->
                    </div>
                <div class="d-flex justify-content-around">
                 <h3> Price</h3>
                 <button class="btn btn-dark" type="button" onclick="window.location='adminProduct.php'">Edit</button>  <!-- Change this to php, just JS for temp purposes -->
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 16rem">
                <img src="assets/TaylorSwift-1989TaylorsVersion-Product-pop.png" style="width: 100%" height="100%" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Artist Name</h5>  <!-- Artist Name  -->
                    <h6 class="card-subtitle">Album Name</h6> <!-- Album Name -->
                    <h6 class="card-subtitle">Genre</h6> <!-- Product Genre -->
                    <p class="card-text">Lorem Ipsom</p> <!-- Product Description -->
                </div>
                <div class="d-flex justify-content-around">
                    <h3> Price</h3>
                    <form action="/adminProduct.php">
                    <button class="btn btn-dark" type="button" onclick="window.location='adminProduct.php'">Edit</button>  <!-- Change this to php, just JS for temp purposes -->
                    </form>
                </div>
                </div>
        </div>

    </div>
</div>













<script src="main.js"> </script>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>




</html>