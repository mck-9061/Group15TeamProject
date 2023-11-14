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
  </head>
  <body class="vh-100" id="index-page">
    <!-- Navbar code here -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <!-- Logo -->
        <a class="navbar-brand fs-2" href="#">Cadence </a>
        <!-- Toggle Button -->
        <button
          class="navbar-toggler shadow-none border-0"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Sidebar Code   (change start to end to make opposite) -->
        <div
          class="sidebar offcanvas offcanvas-end"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <!-- Sidebar Header Code -->
          <div class="offcanvas-header text-white border-bottom">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Cadence</h5>
            <button
              type="button"
              class="btn-close btn-close-white shadow-none"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>

          <!-- Sidebar Body Code -->
          <div class="offcanvas-body d-flex flex-column flex-lg-row p-2 p-lg-0">
            <ul
              class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3"
            >
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="navbar.php">Navbar</a>
              </li>
              <li class="nav-item dropdown mx-2">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Cd's
                </a>
                <ul
                  class="dropdown-menu bg-transparent shadow-none border-0 text-white"
                >
                  <li>
                    <a href="#cdProduct" class="dropdown-item text-white"
                      >Rock</a
                    >
                  </li>

                  <li>
                    <a href="#vinylProduct" class="dropdown-item text-white"
                      >Metal</a
                    >
                  </li>

                  <li>
                    <a href="#merchProduct" class="dropdown-item text-white"
                      >Rap</a
                    >
                  </li>
                </ul>
              </li>

              <li class="nav-item mx-2">
                <a class="nav-link" href="about.html">About</a>
              </li>
            </ul>
            <!-- Login / Sign Up Code -->
            <div
              class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3"
            >
              <a
                href="login.php"
                class="text-white text-decoration-none px-3 py-1 bg-success rounded-4"
                >Login</a
              >
              <a
                href="signup.php"
                class="text-white text-decoration-none px-3 py-1 rounded-4"
                style="background-color: var(--accentBlack)"
                >Sign Up</a
              >
            </div>
          </div>
        </div>
      </div>
    </nav>
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
        <div class="carousel-item active">
          <img
            src="assets/New-RadioHead-BundleArt.png"
            class="d-block w-100 c-item c-img"
            alt="Slide 1"
          />
        </div>
        <div class="carousel-item">
          <img
            src="assets/Приворот.png"
            class="d-block w-100 c-item c-img"
            alt="Slide 2"
          />
        </div>
        <div class="carousel-item">
          <img
            src="assets/20thanniversaryEvanescence.png"
            class="d-block w-100 c-item c-img"
            alt="Slide 3"
          />
        </div>
        <div class="carousel-item">
          <img
            src="assets/perfect-picture-sale.png"
            class="d-block w-100 c-item c-img"
            alt="Slide 4"
          />
        </div>
        <div class="carousel-item">
          <img
            src="assets/this-is-happening-art.png"
            class="d-block w-100 c-item c-img img-fluid"
            alt="Slide 5"
          />
        </div>
        <div class="carousel-item">
          <img
            src="assets/lowRoar.png"
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
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
