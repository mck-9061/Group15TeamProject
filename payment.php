<!DOCTYPE html>
<html lang="en">
<?php
session_start()
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadence | Payment</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
    <link rel="icon" type="image" href="assets/favicon.ico">
</head>

<body class="vh-100 overflow-x-auto" id="payment-page">

    <?php require "navbar.php" ?>
    <div class="payment_container">
        <h2 style="color:#fff">Enter Payment Details</h2>
        <form action="#" method="post">
            <div class="input-group">
                <input type="text" id="cardNumber" name="cardNumber" placeholder="Card Number" required>
            </div>
            <div class="input-group">
                <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>
                <input type="password" id="cvv" name="cvv" placeholder="CVV" required>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
    <!-- About page content -->

    <?php require "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>