<script src="js/search.js"></script>
<!-- nav start -->
<div id="nav-bottom-border">

    <!-- Nav Header  (technically drop-down code?)-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container d-flex">
            <a class="navbar-brand fs-1" id="main-word" href="index.php">CADENCE</a>
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
                                href="about.php"
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
                            <li><a class="dropdown-item" href="products.php?genre=metal&type=cd">Metal</a></li>
                            <li><a class="dropdown-item" href="products.php?genre=rap&type=cd">Rap</a></li>
                            <li><a class="dropdown-item" href="products.php?genre=punk&type=cd">Punk</a></li>
                            <li><a class="dropdown-item" href="products.php?genre=dance&type=cd">Dance</a></li>
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
                            <li><a class="dropdown-item" href="products.php?genre=rock&type=vinyl">Rock</a></li>
                            <li><a class="dropdown-item" href="products.php?genre=indie&type=vinyl">Indie</a></li>
                            <li><a class="dropdown-item" href="products.php?genre=pop&type=vinyl">Pop</a></li>
                            <li><a class="dropdown-item" href="products.php?genre=kpop&type=vinyl">KPop</a></li>

                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <a class="dropdown-item" href="products.php?type=vinyl">Our Vinyl Catalogue</a>
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
                            <li><a class="dropdown-item" href="products.php?genre=jpop&type=ep">JPop</a></li>
                            <li><a class="dropdown-item" href="products.php?genre=kpop&type=ep">KPop</a></li>
                            <li><a class="dropdown-item" href="products.php?genre=indie&type=ep">Indie</a></li>
                            <li><a class="dropdown-item" href="products.php?genre=dance&type=ep">Dance</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <a class="dropdown-item" href="products.php?type=ep">Our EP Catalogue</a>
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
                                    href="account/dashboard.php"
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
