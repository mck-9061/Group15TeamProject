<!DOCTYPE html>
<html lang="en">
  <head>
      <?php session_start() ?>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Cadence | Sign Up</title>
      <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
      <link rel="icon" type="image" href="assets/favicon.ico">

  </head>
  <body id="signup-page">
    <div class="signUpBox">
      <div class="signUpBorderLine">
        <form action="php/register.php" method="post">
          <h2>Sign Up</h2>
            <?php include 'php/message.php'; ?>
          <div class="inputBox">
            <input type="text" required="required" name="email" maxlength="30" />
            <span>Email</span>
            <i></i>
          </div>
          <div class="inputBox">
            <input type="text" required="required" name="username" maxlength="20" />
            <span>Username</span>
            <i></i>
          </div>
          <div class="inputBox">
            <input type="password" required="required" name="password" maxlength="30" />
            <span>Password</span>
            <i></i>
          </div>
            <div class="inputBox">
                <input type="password" required="required" name="confirmPassword" maxlength="30" />
                <span>Confirm Password</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="phoneNumber" maxlength="11" />
                <span>Phone Number</span>
                <i></i>
            </div>

          <div class="extraSignUp">
            <a href="index.php">Go back</a>
          </div>
            <div class="signupReg flex-row">
                <input type="submit" value="Register" id="signUpRegisterBtn"/>

            </div>
        </form>
      </div>
    </div>
  </body>
</html>
