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
    <script>
        // Function to validate input and allow only non-numeric characters
        function validateInput(event) {
            var inputValue = event.key;
            if (/^\d+$/.test(inputValue)) {
                event.preventDefault();
            }
        }
    </script>
</head>

<body class="vh-100 overflow-x-auto" id="payment-page">

    <?php require "navbar.php" ?>
    <div class="payment_container">
        <h2 class="payment_container-title">Payment Details</h2>
        <form action="/submit-payment" method="post">
            <div class="card-details">
                <label for="card-number" style="color:white;">Card Number:</label>
                <input class="card-datails-input" type="number" id="card-number" name="card-number" placeholder="Enter your card number" required>
            </div>
            <div class="card-details">
                <label for="cardholder-name" style="color:white;">Cardholder Name:</label>
                <input class="card-datails-input" type="text" id="cardholder-name" name="cardholder-name" placeholder="Enter cardholder name" required onkeypress="validateInput(event)">
            </div>
            <div class="card-type">
                <label for="card-type" style="color:white;">Card Type:</label>
                <select id="card-type" name="card-type" class="card-datails-input" required>
                    <option value="visa">Visa</option>
                    <option value="mastercard">Mastercard</option>
                    <option value="amex">American Express</option>
                    <option value="discover">Discover</option>
                </select>
            </div>
            <div class="grid">
                <div class="card-details">
                    <label for="cvv" style="color:white;">CVV:</label>
                    <input type="password" class="card-datails-input" id="cvv" name="cvv" placeholder="Enter CVV" required>
                </div>
                <div class="card-details">
                    <label for="expiry-date" style="color:white;">Expiry Date:</label>
                    <input type="date" class="card-datails-input" id="expiry-date" name="expiry-date" required>
                </div>
            </div>
            <div class="billing-address">
                <label for="address" style="color:white;">Billing Address:</label>
                <textarea id="address" class="card-datails-input" name="address" placeholder="Enter your billing address" required></textarea>
            </div>
            <input class="card-details-submit" type="submit" value="Submit Payment">
        </form>
    </div>

    <footer id="index-footer">
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-3 col-md-6  align-items-center text-center">
                    <br>
                    <br>
                    <a href="about.php" class="align-items-center">
                        <img src="assets/logo.png" width="100px">
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
                            <a href="index.php" class="footer-items "> Home</a>
                        </li>
                        <li>
                            <i class="fa fa"></i>
                            <a href="products.php" class="footer-items"> Products page</a>
                        </li>
                        <li>
                            <i class="fa fa"></i>
                            <a href="about.php" class="footer-items"> Who we are!</a>
                        </li>
                    </ul>


                </div>
                <div class="col-lg-2 col-md-6 footer-contact">
                    <br>

                    <h4 class="text-center" id="footer-contact-us"> Support</h4>
                    <ul class="footer-list">

                        <li>
                            <i class="fa fa"></i>
                            <a href="contact-us.php" class="footer-items ">Contact Us </a>
                        </li>
                        <li>
                            <i class="fa fa"></i>
                            <a href="our-privacy-policy.php" class="footer-items"> Privacy Policy</a>
                        </li>
                        <li>
                            <i class="fa fa"></i>
                            <a href="cookies-policy.php" class="footer-items"> Cookie Policy</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-2 footer-contact">
                    <br>

                    <h4 class="text-center" id="footer-contact-us"> Legal</h4>

                    <ul class="footer-list">

                        <li>
                            <i class="fa fa"></i>
                            <a href="statement.php" class="footer-items "> Modern Slavery Statement</a>
                        </li>
                        <li>
                            <i class="fa fa"></i>
                            <a href="our-privacy-policy.php" class="footer-items"> Privacy Policy</a>
                        </li>
                        <li>
                            <i class="fa fa"></i>
                            <a href="cookies-policy.php" class="footer-items"> Cookie Policy</a>
                        </li>
                        <li>
                            <i class="fa fa"></i>
                            <a href="terms-condition.php" class="footer-items"> Terms & Condition</a>
                        </li>
                    </ul>

                </div>
            </div>

            <div id="footer-copyright">
                <h5> 2023 @Copyright Cadence </h5>

            </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>