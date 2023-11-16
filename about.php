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
  </head>
  <body class="vh-100" id="about-page">
    <!-- Navbar code -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <!-- Logo -->
        <a class="navbar-brand fs-2" href="index.php">Cadence </a>
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
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="Legacy Code/navbar.php">Navbar</a>
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

              <li class="nav-item mx-2 active">
                <a class="nav-link" href="about.php">About</a>
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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>