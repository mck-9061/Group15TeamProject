<!Doctype HTML>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Products</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="admin.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
    <link rel="icon" type="image" href="assets/favicon.ico">

</head>

<body id="admin-product">
<div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar" aria-labelledby="offcanvasLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLabel">Cadence-Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <ul class="sidebar-content">

        <li>
            <i class="fa fa"></i>
            <a href="adminHome.php" class="sidebar-item"> Admin Home</a>
        </li>
        <li>
            <i class="fa fa"></i>
            <a href="adminAccounts.php" class="sidebar-item"> Manage Accounts</a>
        </li>
        <li>
            <i class="fa fa"></i>
            <a href="adminProducts.php" class="sidebar-item "> Manage Products</a>
        </li>
        <li>
            <i class="fa fa"></i>
            <a href="index.php" class="sidebar-item"> Website Home page</a>
        </li>
        <li>
            <i class="fa fa"></i>
            <a href="addProduct.php.php" class="sidebar-item"> Add Product</a>
        </li>
        <li>
            <i class="fa fa"></i>
            <a href="adminProduct.php" class="sidebar-item is-active"> Current Product</a> <!-- Change title to Current product Name -->
        </li>
    </ul>


</div>


<a class="btn btn-primary py-2 d-md-grid" data-bs-toggle="offcanvas" href="#sidebar" role="button" id="admin-options-panel" aria-controls="offcanvasExample">
    Admin List (Click on)
</a>

<h1 id="product-type-statement" class="text-center text-uppercase">Add Product</h1> <!--Specifiy what products are listed i.e. vinyl,cd etc. -->

<div class="container-md py-4">

    <!--

    Plan two things needed. First form on maybe left hand side of screen so that any edits can take place to the actual content of the products,
    then on the right side of the screen it shows how that change will affect the product listing.

    This basically makes the use of a mobile form impossible for the admin panel as that WILL break the screen.


    -->
<form action="php/admin/add_product.php" method="POST" enctype="multipart/form-data">
    <div class="grid-edit-container">
        <div class="grid-item">
            <label for="ArtName">Artist name:</label>
            <br>
            <input type="text" id="ArtName" placeholder="artist name" name="ArtName"> <!-- change placeholder to artistname id  -->
        </div>
        <div class="grid-item">
            <label for="AlbmName">Album name:</label>
            <br>
            <input type="text" id="AlbmName" placeholder="album name" name="AlbmName"> <!-- change placeholder to album id  -->
        </div>
        <div class="grid-item" >
            <label for="Genre">Genre:</label>    <!--   All are id'd so you can change quicker        -->
            <br>
            <input type="radio" id="GENRE-PICK-ROCK" name="genres" value="Rock">
            <label for="GENRE-PICK-ROCK">Rock</label><br>
            <input type="radio" id="GENRE-PICK-JPOP" name="genres" value="JPop">
            <label for="GENRE-PICK-JPOP">Jpop</label><br>
            <input type="radio" id="GENRE-PICK-KPOP" name="genres" value="KPop">
            <label for="GENRE-PICK-KPOP">Kpop</label><br>
            <input type="radio" id="GENRE-PICK-RAP" name="genres" value="Rap">
            <label for="GENRE-PICK-RAP">Rap</label><br>
            <input type="radio" id="GENRE-PICK-INDIE" name="genres" value="Indie">
            <label for="GENRE-PICK-INDIE">Indie</label><br>
            <input type="radio" id="GENRE-PICK-METAL" name="genres" value="Metal">
            <label for="GENRE-PICK-METAL">Metal</label><br>
            <input type="radio" id="GENRE-PICK-POP" name="genres" value="Pop">
            <label for="GENRE-PICK-POP">Pop</label><br>
            <input type="radio" id="GENRE-PICK-PUNK" name="genres" value="Punk">
            <label for="GENRE-PICK-PUNK">Punk</label><br>
            <input type="radio" id="GENRE-PICK-DANCE" name="genres" value="Dance">
            <label for="GENRE-PICK-DANCE">Dance</label><br>
        </div>
        <div class="grid-item">
            <label for="PrdType">Product Type / Types:</label>
            <br>

            <input type="radio" id="PRD-TYPE-CD" name="product-type" value="CD">
            <label for="PRD-TYPE-CD">CD</label><br>
            <input type="radio" id="PRD-TYPE-VINYL" name="product-type" value="Vinyl">
            <label for="PRD-TYPE-VINYL">Vinyl</label><br>
            <input type="radio" id="PRD-TYPE-EP" name="product-type" value="EP">
            <label for="PRD-TYPE-EP">EP</label><br>
            <input type="radio" id="PRD-TYPE-MERCH" name="product-type" value="Merch">
            <label for="PRD-TYPE-MERCH">Merch</label><br>
        </div>
        <div class="grid-item">
            <label for="PrdDsc">Product Description:</label>
    <br>

                <textarea id="description-box" name="description-box" rows="4" cols="40">Change this text</textarea>


        </div>
        <div class="grid-item">
            <label for="PrdPrice">Product Price:</label>
            <br>
            <input type="text" id="PrdPrice" name="PrdPrice">
        </div>

        <div class="grid-item">

            <label for="PrdYTLink"> Sample link: </label>
            <br>
            <input type="text" id="PrdYTLink" name="PrdYTLink" placeholder="put link here">

        </div>

        <div class="grid-item">
            <label>Product Image (200x200px recommended)</label><br>

                <label for="fileToUpload">
                </label>
                <input type="File" name="fileToUpload" id="fileToUpload">


        </div>



        <!-- Instead make it a hover effect on the image to change it -->
        <div class="grid-item"><label for="checkSave">Save</label>
            <br>
            <input type="submit" value="Create Product">

            <input type="reset" id="resetChanges" value="Reset to default">

            <br>
            <br>
            <input type="button" value="Go Back">
        </div>
    </div>
</form>






</div>




<script src="main.js"> </script>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>




</html>