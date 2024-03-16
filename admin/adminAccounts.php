<!Doctype HTML>
<html lang="en">
<?php
session_start();
require '../php/fetch_accounts.php';
require '../php/message.php';
require "../php/admin/auth_admin.php"
?>

<head>

   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Customer Accounts</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../admin.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
    <link rel="icon" type="image" href="../assets/favicon.ico">

</head>

<body id="admin-home">
<div class="offcanvas offcanvas-end " tabindex="-1" id="sidebar" aria-labelledby="offcanvasLabel">
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
            <a href="adminAccounts.php" class="sidebar-item is-active"> Manage Accounts</a>
        </li>
        <li>
            <i class="fa fa"></i>
            <a href="adminProducts.php" class="sidebar-item"> Manage Products</a>
        </li>
        <li>
            <i class="fa fa"></i>
            <a href="../index.php" class="sidebar-item"> Website Home page</a>
        </li>
        <li>
            <i class="fa fa"></i>
            <a href="addProduct.php" class="sidebar-item"> Add Product</a>
        </li>
    </ul>


</div>
<a class="btn btn-primary py-2 d-md-grid" data-bs-toggle="offcanvas" href="#sidebar" role="button" id="admin-options-panel" aria-controls="offcanvasExample">
    Admin List (Click on)
</a>
<div class="headers">
    <h1 id="product-type-statement" class="text-center text-uppercase"> Accounts </h1> <!--Specifiy what products are listed i.e. vinyl,cd etc. -->


</div>

<div class="container py-5">
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4 py-5">
        <?php
        $accounts = fetchAccounts();
        foreach ($accounts as $account) {
            ?>
                <div class="col">
                    <div class="card" style="width: 18rem">

                        <div class="card-body text-center">
                            <h5 class="card-title" id="account-name-card"><?php echo $account['username']; ?></h5>  <!-- Account Name  -->
                            <h6 class="card-subtitle" id="account-email-card"><?php echo $account['email']; ?></h6>
                            <h6 class="card-subtitle" id="account-email-card"><?php echo $account['phone']; ?></h6>
                            <!-- Rest of Information is in the Account view, otherwise this would be too much info -->

                        </div>
                        <div class="d-flex justify-content-around">
                            <a class="btn btn-dark" type="button" href="adminCustomerAccountView.php?user=<?php echo $account['username']; ?>">View</a>
                        </div>
                    </div>
                </div>
            <?php
        }
        ?>

    </div>
</div>













<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
></script>
<script src="../main.js"> </script>
</body>






</html>