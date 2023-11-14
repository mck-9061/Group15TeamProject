<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadence | Navbar</title>
    <!-- Css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body id="navbar-test">
    
    <!-- nav start -->
    <div>
      <div class="header">
      
      </div>

      <!-- Nav Header  (technically drop down code?)-->
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
           
            <ul class="navbar-nav align-items-center justify-content-center me-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a
                  class="nav-link active text-white fs-4"
                  aria-current="page"
                  href="#"
                  >ABOUT US</a
                >
             
                <a
                  class="nav-link dropdown-toggle text-white fs-4"
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
                    <a class="dropdown-item" href="#">CD PRODUCTS</a>
                  </li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-white text-decortation-none fs-4"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  VINYL 
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">ROCK</a></li>
                  <li><a class="dropdown-item" href="#">INDIE</a></li>
                  <li><a class="dropdown-item" href="#">POP</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">VINYL PRODUCTS</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link disabled text-white fs-4"
                  aria-disabled="true"
                  >MERCH </a
                >
              </li>
                <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3"

                <?php
                    session_start()
                ?>
              <a
                href="login.php"
                class=" px-3 py-1 rounded-4"
                
                id="login-pill"
                >LOGIN</a
              >
              <a
                href="signup.php"
                class=" px-3 py-1 rounded-4"
                
                id="sign-pill"
                >SIGN UP</a
              >
              </li>
            </ul>
            <form class="d-flex text-white" role="search">
              <input
                class="form-control me-2 text-white"
                type="search"
                placeholder="search..."
                aria-label="Search"
                id="search-bar"
              />
              <button class="btn " id="navbar-search-btn" type="submit">
                <span class="material-symbols-outlined px-2 py-2 rounded-4">
                  search
                  </span>
              </button>
            </form>
          </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- nav end   -->

    <?php
    include("php/message.php")
    ?>

    <!-- Javascript -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    
  </body>
</html>