<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadence | About Us</title>
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
  </head>
  <body class="vh-100" id="about-page">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container d-flex">
          <a class="navbar-brand  fs-1" id="main-word" href="index.php">CADENCE</a>
          <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
          >
              <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Nav body -->
          <div class=" navbar-collapse collapse " id="navbarSupportedContent">

              <ul class="navbar-nav align-items-center justify-content-center me-auto mx-auto ">
                  <li class="nav-item">
                      <a
                              class="nav-link active text-white fs-5"
                              aria-current="page"
                              href="about.php"
                      >ABOUT US</a
                      >

                  <li class="nav-item dropdown">
                      <a
                              class="nav-link dropdown-toggle text-white text-decoration-none fs-5"
                              href="#"
                              role="button"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                      >
                          CD'S
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">METAL</a></li>
                          <li><a class="dropdown-item" href="#">RAP</a></li>
                          <li><a class="dropdown-item" href="#">PUNK</a></li>
                          <li><a class="dropdown-item" href="#">DANCE</a></li>
                          <li><hr class="dropdown-divider" /></li>
                          <li>
                              <a class="dropdown-item" href="products.php">Our CD Catalogue</a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item dropdown">
                      <a
                              class="nav-link dropdown-toggle text-white text-decortation-none fs-5"
                              href="#"
                              role="button"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                      >
                          VINYL
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Rock</a></li>
                          <li><a class="dropdown-item" href="#">Indie</a></li>
                          <li><a class="dropdown-item" href="#">Pop</a></li><li><a class="dropdown-item" href="#">Pop</a></li>

                          <li><hr class="dropdown-divider" /></li>
                          <li>
                              <a class="dropdown-item" href="products.php">Our Vinyl Catalogue</a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a
                              class="nav-link dropdown-toggle text-white text-decortation-none fs-5"
                              href="#"
                              role="button"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                      >
                          Ep's
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">JPop</a></li>
                          <li><a class="dropdown-item" href="#">Kpop</a></li>
                          <li><a class="dropdown-item" href="#">Global</a></li>
                          <li><a class="dropdown-item" href="#">Indie</a></li>
                          <li><a class="dropdown-item" href="#">Our Favs</a></li>
                          <li><hr class="dropdown-divider" /></li>
                          <li>
                              <a class="dropdown-item" href="products.php">Our Ep Catalogue</a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a
                              class="nav-link dropdown-toggle text-white text-decortation-none fs-5"
                              href="#"
                              role="button"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                      >
                          Merch
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Band Apparel</a></li>
                          <li><a class="dropdown-item" href="#">Posters</a></li>
                          <li><a class="dropdown-item" href="#">Books</a></li>
                          <li><a class="dropdown-item" href="#">Funko's</a></li>
                          <li><a class="dropdown-item" href="#">Figures</a></li>
                          <li><hr class="dropdown-divider" /></li>
                          <li>
                              <a class="dropdown-item" href="products.php">Our Merch Catalogue</a>
                          </li>




                      </ul>
              </ul>
              <div class="NavBarSearchDiv">
                  <form class="d-flex text-align-center justify-content-end" role="search" >
                      <input
                              class="form-control me-3 "
                              type="search"
                              placeholder="search..."
                              aria-label="Search"
                              id="search-bar"
                      />
                      <div class="btn " id="navbar-search-btn" type="submit">
                          <div style="transform: rotate(-45deg)">
                              ⚲
                          </div>
                      </div>
                  </form>
              </div>
              <div class="accountNavBar d-flex gap-3  mx-auto justify-content-end">
                  <p>
                      <a
                              href="login.php"
                              class=" px-2 py-2 rounded-4"
                              id="login-pill"
                      >Login</a>
                  </p>
                  <p>
                      <a
                              href="signup.php"
                              class="px-3 py-2 rounded-4"
                              id="sign-pill"
                      >SignUp</a>


                  </p>


              </div>

              <div class="basketBar d-flex gap-3 mx-auto ">

                  <button id="basketPill" class="py-1 px-2 rounded-4" >
                      <a href="cart.php"

                      <span class="material-symbols-outlined text-decoration-none" id="basket-icon">
                            shopping_basket
                          </span>

                      </a>
                  </button>

              </div>


          </div>
      </div>
      </div>
      </div>
  </nav>

    <!-- About page content -->
    <div class="container mt-4">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-white">
          <h2 class="mb-4">About Cadence</h2>
          <p>
            Welcome to Cadence, your go-to platform for discovering and
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
            Feel the rhythm, embrace the melody, and join us in celebrating the
            diverse world of music. Cadence is not just a platform; it's a
            community that shares the love for music in all its forms.
          </p>
        </div>
      </div>
    </div>
    <!-- Contact Information -->
    <div class="container mt-4">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-white">
          <h2 class="mb-4">Contact Information</h2>
          <p>Email: <a href="mailto:info@cadence.com">info@cadence.com</a></p>
          <p>Phone: +44 5362 561899</p>
        </div>
      </div>
    </div>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
