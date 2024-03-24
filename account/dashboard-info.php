<!Doctype HTML>
<html lang="en">
<?php
session_start();
include '../php/fetch_accounts.php';
require '../php/message.php';

if (isset($_SESSION['username'])) {
    $selectedUser = $_SESSION['username'];

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
        header("Location: ../index.php");
    }
} else {
    header("Location: ../index.php");
}
?>

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

<body id="dashboard-info">



<div class="profile-info">
    <div class="infoBorderLine">
        <form action="../php/admin/update_account_details.php" method="post" autocomplete="off">
            <h2>Your Info: <?php echo $accountName; ?></h2>
            <input type="text" hidden="hidden" name="name" maxlength="30" value="<?php echo $accountName; ?>" />

            <div class="inputBox">
                <input type="text" required="required" name="email" maxlength="30" value="<?php echo $accountEmail; ?>" />
                <span>Your Email</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="passReset" maxlength="30"/>
                <span>Change Password</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="phone" maxlength="11" value="<?php echo $accountPhone; ?>"/>
                <span>Your Number</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="address" maxlength="50" value="<?php echo $accountAddress; ?>" />
                <span>Your Address</span>
                <i></i>
            </div>

            <div class="extraInfo">
                <a href="dashboard.php">Go back</a>
            </div>
            <div class="signupReg flex-row">

                <input type="submit" value="Update" id="signUpRegisterBtn"/>

            </div>
        </form>
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