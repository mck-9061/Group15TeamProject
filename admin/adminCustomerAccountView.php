<!Doctype HTML>
<html lang="en">
<?php
session_start();
require "../php/admin/auth_admin.php";

include '../php/fetch_accounts.php';

if (isset($_GET['user'])) {
    $selectedUser = $_GET['user'];

    // Fetch all accounts
    $accounts = fetchAccounts();

    // Find the selected account by its name
    $selectedAccount = null;
    foreach ($accounts as $account) {
        if ($account['username'] == $selectedUser) {
            $selectedAccount = $account;
            break;
        }
    }

    if ($selectedAccount) {
        $accountName = $selectedAccount['username'];
        $accountEmail = $selectedAccount['email'];
        $accountPhone = $selectedAccount['phone'];
        $accountAddress = $selectedAccount['address'];

        if ($accountAddress == 0) {
            $accountAddress = "No address on file";
        }
    } else {
        header("Location: adminAccounts.php");
    }
} else {
    header("Location: adminAccounts.php");
}
?>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $accountName; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../admin.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
    <link rel="icon" type="image" href="../assets/favicon.ico">

</head>

<body id="admin-customer-acc-view">
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
            <a href="adminProducts.php" class="sidebar-item "> Manage Products</a>
        </li>
        <li>
            <i class="fa fa"></i>
            <a href="../index.php" class="sidebar-item"> Website Home page</a>
        </li>
        <li>
            <i class="fa fa"></i>
            <a href="adminProduct.php" class="sidebar-item is-active"> Account </a> <!-- Change title to Current Account Name -->
        </li>
    </ul>


</div>


<a class="btn btn-primary py-2 d-md-grid" data-bs-toggle="offcanvas" href="#sidebar" role="button" id="admin-options-panel" aria-controls="offcanvasExample">
    Admin List (Click on)
</a>

<h1 id="product-type-statement" class="text-center text-uppercase">Account </h1> <!--Specifiy what products are listed i.e. vinyl,cd etc. -->

<div class="container-md py-4">

    <!--

    Plan two things needed. First form on maybe left hand side of screen so that any edits can take place to the actual content of the products,
    then on the right side of the screen it shows how that change will affect the product listing.

    This basically makes the use of a mobile form impossible for the admin panel as that WILL break the screen.


    -->
    <form action="../php/admin/edit_account.php" method="POST" >

    <div class="grid-edit-container">

        <div class="grid-item">
            <label for="ACCFName">Username:</label>
            <br>
            <input type="text" id="ACCFName" name="name" value="<?php echo $accountName; ?>" readonly>
        </div>
        <div class="grid-item">
            <label for="ACCEmail">Account Email:</label>
            <br>
            <input type="text" id="ACCEmail" name="email" value="<?php echo $accountEmail; ?>" required>
        </div>
        <div class="grid-item">
            <label for="ACCADDS">Account Address:</label>
            <br>
            <input type="text" id="ACCADDS" name="address"  value="<?php echo $accountAddress; ?>" required>
        </div>
        <div class="grid-item">
            <label for="telNum">Telephone Number:</label>
            <br>
            <input type="tel" id="telNum" name="phone"  value="<?php echo $accountPhone; ?>" required>
        </div>


        <!--  <div class="grid-item"><label for="NewImg">Upload new Image</label>
              <input type="file" id="NewImg" name="NewImg">
              <input type="submit">
          </div>
  -->         <!-- Instead make it a hover effect on the image to change it -->

        <div class="grid-item"><label for="saveACCChanges">Save changes:</label>
<br>
            <button type="submit" id="saveACCChanges">Save</button>
        </div>
        </form>
        <div class="grid-item"><label for="deleteACC">Delete Account:</label>
            <br>
            <form action="../php/admin/delete_account.php" method="POST" >
                <input type="text" id="ACCFName" name="name" value="<?php echo $accountName; ?>" readonly hidden="hidden">
                <button type="submit" id="deleteACC">Delete</button>
            </form>
            <br>
            <p id="delete-warning">Warning, once account is deleted it can not be undone.</p>

        </div>
        <div class="grid-item">
            <br>
        </div>
        <div class="grid-item">
            <label for="PrdDsc">Reset Password:</label>
            <br>
            <form action="../php/admin/reset_password.php" method="POST">
                <input type="text" id="ACCFName" name="name" value="<?php echo $accountName; ?>" readonly hidden="hidden">
                <input type="password" id="PrdDsc" name="password" placeholder="New Password" required>
                <br>
                <br>
                <button type="submit" id="password-reset">Reset Password</button>
            </form>
        </div>
        <div class="grid-item">
            <br>
        </div>
    </div>








</div>




<script src="../main.js"> </script>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>




</html>