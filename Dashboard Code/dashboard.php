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
    <link rel="icon" type="image" href="../assets/favicon.ico">

</head>


<body id="customer-home">
<!-- nav start -->
<div id="nav-bottom-border">

    <!-- Nav Header  (technically drop-down code?)-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container d-flex">
            <a class="navbar-brand fs-1" id="main-word" href="../index.php">CADENCE</a>
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
            <div class=" navbar-collapse collapse" id="navbarSupportedContent">

                <ul class="navbar-nav align-items-center justify-content-center me-auto mx-auto ">
                    <li class="nav-item" id="nav-words">
                        <a
                                class="nav-link active text-white fs-5"
                                aria-current="page"
                                href="../about.php"
                        >ABOUT US</a
                        >
                    </li>

                    <li class="nav-item dropdown" id="nav-words">
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
                            <li><a class="dropdown-item" href="../products.php?genre=metal&type=cd">METAL</a></li>
                            <li><a class="dropdown-item" href="../products.php?genre=rap&type=cd">RAP</a></li>
                            <li><a class="dropdown-item" href="../products.php?genre=punk&type=cd">PUNK</a></li>
                            <li><a class="dropdown-item" href="../products.php?genre=dance&type=cd">DANCE</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <a class="dropdown-item" href="products.php?type=cd">Our CD Catalogue</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown" id="nav-words">
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
                            <li><a class="dropdown-item" href="../products.php?genre=rock&type=vinyl">Rock</a></li>
                            <li><a class="dropdown-item" href="../products.php?genre=indie&type=vinyl">Indie</a></li>
                            <li><a class="dropdown-item" href="../products.php?genre=pop&type=vinyl">Pop</a></li>
                            <li><a class="dropdown-item" href="../products.php?genre=kpop&type=vinyl">Kpop</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <a class="dropdown-item" href="../products.php?type=vinyl">Our Vinyl Catalogue</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown" id="nav-words">
                        <a
                                class="nav-link dropdown-toggle text-white text-decortation-none fs-5"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                        >
                            EPs
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="products.php?genre=pop&type=ep">JPop</a></li>
                            <li><a class="dropdown-item" href="products.php?genre=kpop&type=ep">KPop</a></li>
                            <li><a class="dropdown-item" href="products.php?genre=global&type=ep">Global</a></li>
                            <li><a class="dropdown-item" href="products.php?genre=indie&type=ep">Indie</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <a class="dropdown-item" href="products.php?type=ep">Our EP Catalogue</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown" id="nav-words">
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
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="#">Posters</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="#">Books</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="#">Funko's</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="#">Figures</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <a class="dropdown-item" href="products.php">Our Merch Catalogue</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="NavBarSearchDiv">
                    <form class="d-flex text-align-center justify-content-end" role="search" method="post" action="php/search.php">
                        <input
                                class="form-control me-3 "
                                type="text"
                                placeholder="search..."
                                aria-label="Search"
                                id="search-bar"
                                name="term"
                        />
                        <input class="btn" type="submit" value="🔍" id="navbar-search-btn">
                    </form>
                </div>

                <div class="accountNavBar d-flex gap-3 mx-auto justify-content-end">
                    <?php
                    if (isset($_SESSION['username'])) {
                        ?>
                        <p class="account-username" >
                            <a
                                    href="../index.php"
                            ><?php echo $_SESSION['username'] ?></a>
                        </p>
                        <p>
                            <a
                                    href="php/logout.php"
                                    class=" px-2 py-2 rounded-4"
                                    id="logout-pill"
                            >Log out</a>
                        </p>
                        <?php
                    } else {
                        ?>
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
                            >Sign Up</a>
                        </p>
                        <?php
                    }
                    ?>

                </div>

                <div class="basketBar d-flex gap-3 mx-auto ">
                    <button id="basketPill" class="py-1 px-2 rounded-4">
                        <a href="cart.php">
                            <span class="material-symbols-outlined text-decoration-none" id="basket-icon">
                                shopping_basket
                            </span>
                        </a>
                    </button>
                </div>
            </div>
        </div>
</div>
</nav>
</div>
<!-- nav end   -->

<div class="text-center">
    <p id="home-title">Welcome,  (Add user's name here + email) </p>

    <p></p>

    <!--
    <div class="">
        <a href="customer-info.php" > Personal Info</a>
        <a href="#" >Address Book </a>

        <br>
        <a href="">Order History</a>
        <button onclick="window.location='../login.php'"> Delete Account</button>

    </div>

    <hr id="invisible-line">
    <hr id="invisible-line">
    <hr>

    <button onclick="window.location='../index.php'"> Go Home</button>
    <button onclick="window.location='../login.php'"> Sign Out</button>

-->
</div>

 <main>
    <div>
        <div class="row">
            <div class="column customer-options text-center align-items-center">
                <div class="card" id="your-info">
                    <h1 class="title">Your Info</h1>
                    <p class="subtitle">Check what we have and what you want us to have</p>
                    <button class="btn" onclick="window.location='dashboard-info.php'">Read your credits</button>
                </div>
            </div>
            <div class="column customer-options text-center">
                <div class="card" id="history">
                    <h1 class="title">Order History</h1>
                    <p class="subtitle">See prior Order History</p>
                    <button class="btn">Rewind to the past</button>
                </div>
            </div>
        </div>
    </div>
<div>
    <div class="row">
        <div class="column customer-options text-center">
            <div class="card" id="DeleteAcc">
                <h1 class="title">Delete Account</h1>
                <p class="subtitle"> Delete your Account (Dont though we love you to much to lose you!)</p>
                <button class="btn">Button of Regret</button>
            </div>
        </div>
    </div>
</div>
</main>

<footer id="index-footer">
    <div class="footer-top">
        <div class="row">
            <div class="col-lg-3 col-md-6  align-items-center text-center">
                <br>
                <br>
                <a  href="about.php" class="align-items-center" >
                    <img src="../assets/logo.png" width="100px" >
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
                        <a href="mailto:info@cadence.com" class="footer-items "> Email </a>
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
<script src="main.js"> </script>
</body>






</html>