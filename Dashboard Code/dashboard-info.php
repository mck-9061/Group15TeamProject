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

<body id="dashboard-info">


<div class="dashboard-info-form">
    <div class="signUpBorderLine">
        <form action="" method="post">
            <h2>Your Info</h2>

            <div class="inputBox">
                <input type="text" required="required" name="email" maxlength="30" />
                <span>Your Email</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="username" maxlength="20" />
                <span>Your Username</span>   <!-- Cant be edited  -->
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name="password" maxlength="30" />
                <span>Your password</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name="confirmPassword" maxlength="30" />
                <span>Change password</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="phoneNumber" maxlength="11" />
                <span>Your number</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="phoneNumber" maxlength="11" />
                <span>Your Address</span>
                <i></i>
            </div>

            <div class="extraSignUp">
                <a href="dashboard.php">Go back</a>
            </div>
            <div class="signupReg flex-row">
                <input type="submit" value="Register" id="signUpRegisterBtn"/>

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