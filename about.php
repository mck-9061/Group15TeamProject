<!DOCTYPE html>
<html lang="en">
<?php
session_start()
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadence | About Us</title>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
  <link rel="icon" type="image" href="assets/favicon.ico">
</head>

<body class="vh-100 overflow-x-auto" id="about-page">

  <?php require "navbar.php" ?>

  <!-- About page content -->
  <div class="container mt-4 about-us-text">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-white" id="about-content">
        <h2 class="mb-4">About Cadence</h2>
        <p>
          Welcome to <a class="cadence-color">Cadence</a> , your go-to platform for discovering and
          exploring a wide variety of music genres. Whether you're a fan of
          rock, metal, rap, or other genres, we've got something for
          everyone.
        </p>

        <p>
          Our mission is to provide a seamless and enjoyable experience for
          music enthusiasts. Explore our collection of CDs, vinyl, and
          merchandise to enhance your music journey.
        </p>

        <p>
          Feel the <a class="rhythm-color">rhythm</a>, embrace the <a class="melody-color">melody</a>, and join us in celebrating the
          diverse world of music. <a class="cadence-color">Cadence</a> is not just a platform; it's a
          community that shares the love for <a class="music-form-color"> music in all its forms</a>.
        </p>

      </div>
    </div>
  </div>



  <!--   Logo Img       -->
  <div class="about-us-img col-md-4 align-items-center mx-auto ">
    <img src="assets/logo.png" />
  </div>

  <!-- Contact Information -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-white mx-auto align-content-center" id="about-us-contact-info">

        <a href="contact-us.php" class="contact-info-colors">
          <h2 class="mb-4 contact-info-colors">
            Contact Information
          </h2>
        </a>

      </div>
    </div>
  </div>

  <?php require "footer.php" ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>