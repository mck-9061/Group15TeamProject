<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadence</title>
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

  <body class="">
  <!-- nav start -->
  <div>


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

                  <ul class="navbar-nav align-items-center justify-content-center me-auto mx-auto ">
                      <li class="nav-item">
                          <a
                                  class="nav-link active text-white fs-5"
                                  aria-current="page"
                                  href="#"
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
                                  class="px-2 py-2 rounded-4"
                                  id="sign-pill"
                          >Sign Up</a>
                      </p>
                  </div>
              </div>
          </div>
  </div>
  </div>
  </nav>
  </div>
  <!-- nav end   -->

    <div class="container d-flex justify-content-center mt-50 mb-50">

      <div class="row">
        <div class="col-md-4 mt-2">


          <div class="card">
            <div class="card-body">
              <div class="card-img-actions">

              </div>
            </div>

            <div class="card-body bg-light text-center">
              <div class="mb-2">
                <h6 class="font-weight-semibold mb-2">
                  <a href="individual_products_page.php" class="text-default mb-2" data-abc="true">Product Name</a>
                  <br>
                <img src="https://placehold.jp/200x200.png" alt="placeholder" width="200" height="200">
                <br>
                <br>
                <br>

                <a href="#" class="text-muted" data-abc="true">Product Type: Album/Merch/Vinyl</a>
              </div>

              <h3 class="mb-0 font-weight-semibold">Price £</h3>

              <div>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
              </div>

              <div class="text-muted mb-3"> # number of reviews</div>

              <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add To Basket</button>


            </div>
          </div>

        </div>


        <div class="col-md-4 mt-2">


          <div class="card">
            <div class="card-body">
              <div class="card-img-actions">

              </div>
            </div>

            <div class="card-body bg-light text-center">
              <div class="mb-2">
                <h6 class="font-weight-semibold mb-2">
                  <a href="individual_products_page.php" class="text-default mb-2" data-abc="true">Product Name</a>
                  <br>
                <img src="https://placehold.jp/200x200.png" alt="placeholder" width="200" height="200">
                <br>
                <br>
                <br>

                <a href="#" class="text-muted" data-abc="true">Product Type: Album/Merch/Vinyl</a>
              </div>

              <h3 class="mb-0 font-weight-semibold">Price £</h3>

              <div>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
              </div>

              <div class="text-muted mb-3"># number of reviews</div>

              <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add To Basket</button>


            </div>
          </div>

        </div>

        <div class="col-md-4 mt-2">


          <div class="card">
            <div class="card-body">
              <div class="card-img-actions">

              </div>
            </div>

            <div class="card-body bg-light text-center">
              <div class="mb-2">
                <h6 class="font-weight-semibold mb-2">
                  <a href="individual_products_page.php" class="text-default mb-2" data-abc="true">Product Name</a>
                  <br>
                <img src="https://placehold.jp/200x200.png" alt="placeholder" width="200" height="200">
                <br>
                <br>
                <br>

                <a href="#" class="text-muted" data-abc="true">Product Type: Album/Merch/Vinyl</a>
              </div>

              <h3 class="mb-0 font-weight-semibold">Price £</h3>

              <div>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
              </div>

              <div class="text-muted mb-3"># number of reviews</div>

              <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add To Basket</button>


            </div>
          </div>

        </div>


        <div class="col-md-4 mt-2">


          <div class="card">
            <div class="card-body">
              <div class="card-img-actions">

              </div>
            </div>

            <div class="card-body bg-light text-center">
              <div class="mb-2">
                <h6 class="font-weight-semibold mb-2">
                  <a href="individual_products_page.php" class="text-default mb-2" data-abc="true">Product Name</a>
                  <br>
                <img src="https://placehold.jp/200x200.png" alt="placeholder" width="200" height="200">
                <br>
                <br>
                <br>

                <a href="#" class="text-muted" data-abc="true">Product Type: Album/Merch/Vinyl</a>
              </div>

              <h3 class="mb-0 font-weight-semibold">Price £</h3>

              <div>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
              </div>

              <div class="text-muted mb-3"># number of reviews</div>

              <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add To Basket</button>


            </div>
          </div>

        </div>


        <div class="col-md-4 mt-2">


          <div class="card">
            <div class="card-body">
              <div class="card-img-actions">


              </div>
            </div>

            <div class="card-body bg-light text-center">
              <div class="mb-2">
                <h6 class="font-weight-semibold mb-2">
                  <a href="individual_products_page.php" class="text-default mb-2" data-abc="true">Product Name</a>
                  <br>
                  <img src="https://placehold.jp/200x200.png" alt="placeholder" width="200" height="200">
                <br>
                <br>
                <br>

                <a href="#" class="text-muted" data-abc="true">Product Type: Album/Merch/Vinyl</a>
              </div>

              <h3 class="mb-0 font-weight-semibold">Price £</h3>

              <div>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
              </div>

              <div class="text-muted mb-3"># number of reviews</div>

              <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add To Basket</button>


            </div>
          </div>

        </div>


        <div class="col-md-4 mt-2">


          <div class="card">
            <div class="card-body">
              <div class="card-img-actions">

              </div>
            </div>

            <div class="card-body bg-light text-center">
              <div class="mb-2">
                <h6 class="font-weight-semibold mb-2">
                  <a href="individual_products_page.php" class="text-default mb-2" data-abc="true">Product name</a>
                  <br>
                <img src="https://placehold.jp/200x200.png" alt="placeholder" width="200" height="200">
                <br>
                <br>
                <br>
                <a href="#" class="text-muted" data-abc="true">Product Type: Album/Merch/Vinyl</a>
              </div>

              <h7 class="mb-0 font-weight-semibold">Price £</h7>

              <div>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
                <i class="fa fa-star star"></i>
              </div>
              <div class="text-muted mb-3"># number of reviews</div>
              <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add To Basket</button>

            </div>
          </div>

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