<?php /*

$ordered=true;
include 'php/recommended_caro.php'
*/
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadence | Home page</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
      <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
      <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
  <link rel="icon" type="image" href="assets/favicon.ico">
  </head>

  <body  id="index-page">

  <?php require "navbar.php" ?>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#hero-carousel"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#hero-carousel"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#hero-carousel"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
        <button
          type="button"
          data-bs-target="#hero-carousel"
          data-bs-slide-to="3"
          aria-label="Slide 4"
        ></button>
        <button
          type="button"
          data-bs-target="#hero-carousel"
          data-bs-slide-to="4"
          aria-label="Slide 5"
        ></button>
        <button
          type="button"
          data-bs-target="#hero-carousel"
          data-bs-slide-to="5"
          aria-label="Slide 6"
        ></button>

      </div>

      <div class="carousel-inner">
          <!--<?php
           // if(isset($_SESSION["username"]) and $ordered === true){
              // $img = getRandImg($_SESSION["username"]);
               ?>
                  <div class="carousel-item active">
                      <img
                              src="<?php // echo $img;?>"
                              class="d-block w-100 c-item c-img"
                              alt="Slide 1"
                      />
                  </div>
          <?php // } else { ?> -->
        <div class="carousel-item active">
          <img
            src="assets/New-RadioHead-BundleArt.png"
            class="d-block w-100 c-item c-img"
            alt="Slide 1"
          />
        </div>
          <?php // } ?>
        <div class="carousel-item">
          <img
            src="assets/Приворот-carousel.png"
            class="d-block w-100 c-item c-img"
            alt="Slide 2"
          />
        </div>
        <div class="carousel-item">
          <img
            src="assets/20thanniversaryEvanescence-carousel.png"
            class="d-block w-100 c-item c-img"
            alt="Slide 3"
          />
        </div>
        <div class="carousel-item">
          <img
            src="assets/InternetYamero-carousel.png"
            class="d-block w-100 c-item c-img"
            alt="Slide 4"
          />
        </div>
        <div class="carousel-item">
          <img
            src="assets/this-is-happening-art-carousel.png"
            class="d-block w-100 c-item c-img img-fluid"
            alt="Slide 5"
          />
        </div>
        <div class="carousel-item">
          <img
            src="assets/lowRoar-carousel.png"
            class="d-block w-100 c-item c-img"
            alt="Slide 6"
          />
        </div>

      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#hero-carousel"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon " aria-hidden="true" >

        </span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#hero-carousel"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

<footer id="index-footer">
    <div class="footer-top">
        <div class="row">
            <div class="col-lg-3 col-md-6  align-items-center text-center">
                <br>
                <br>
                <a  href="about.php" class="align-items-center" >
                    <img src="assets/logo.png" width="100px" >
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

                <h4 class="text-center" id="footer-contact-us"> Contact Us</h4>
                <ul class="footer-list">

                    <li>
                        <i class="fa fa"></i>
                        <a href="mailto:info@cadence.com" class="footer-items "> Email  <span id="footer-email-color">info@cadence.com </span></a>
                    </li>
                    <li>
                        <i class="fa fa"></i>
                        <a href="#" class="footer-items"> Privacy Policy</a>
                    </li>
                    <li>
                        <i class="fa fa"></i>
                        <a href="#" class="footer-items"> Cookie Policy</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-2 footer-contact">
                <br>

                <h4 class="text-center" id="footer-contact-us"> Legal</h4>

                <ul class="footer-list">

                    <li>
                        <i class="fa fa"></i>
                        <a href="#" class="footer-items "> Modern Slavery Statement</a>
                    </li>
                    <li>
                        <i class="fa fa"></i>
                        <a href="#" class="footer-items"> Privacy Policy</a>
                    </li>
                    <li>
                        <i class="fa fa"></i>
                        <a href="#" class="footer-items"> Cookie Policy</a>
                    </li>
                    <li>
                        <i class="fa fa"></i>
                        <a href="#" class="footer-items"> Terms & Condition</a>
                    </li>
                </ul>

            </div>
        </div>

        <div id="footer-copyright" >
                <h5> 2023 @Copyright Cadence </h5>

    </div>

</footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
