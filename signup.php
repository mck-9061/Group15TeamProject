<!DOCTYPE html>
<html lang="en">
  <head>
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
  </head>
  <body id="signup-page">
    <div class="signUpBox">
      <div class="signUpBorderLine">
        <form method="post" action="php/register.php">
          <h2>Sign Up</h2>
          <div class="inputBox">
            <input type="email" required="required" name="email" />
            <span>Email</span>
            <i></i>
          </div>
          <div class="inputBox">
            <input type="text" required="required" name="username" />
            <span>Username</span>
            <i></i>
          </div>
          <div class="inputBox">
            <input type="password" required="required" name="password" />
            <span>Password</span>
            <i></i>
          </div>
          <div>
            <input type="submit" value="Register" />
            <i></i>
          </div>
          <div class="extraSignUp">
            <a href="index.php">Go back</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
