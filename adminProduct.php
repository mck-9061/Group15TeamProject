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

<h1 id="product-type-statement" class="text-center text-uppercase">Products Type</h1> <!--Specifiy what products are listed i.e. vinyl,cd etc. -->

<div class="container-md py-4">

    <!--

    Plan two things needed. First form on maybe left hand side of screen so that any edits can take place to the actual content of the products,
    then on the right side of the screen it shows how that change will affect the product listing.

    This basically makes the use of a mobile form impossible for the admin panel as that WILL break the screen.


    -->

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
            <label>
                <input type="checkbox" value="" class="genre-picker-addProd" id="genre-Dance">Dance
            </label>
            <br>
            <label>
                <input type="checkbox" value="" class="genre-picker-addProd" id="genre-Indie">Indie
            </label>
            <br>
            <label>
                <input type="checkbox" value="" class="genre-picker-addProd" id="genre-JPop">JPop
            </label>
            <br>
            <label>
                <input type="checkbox" value="" class="genre-picker-addProd" id="genre-KPop">KPop
            </label>
            <br>
            <label>
                <input type="checkbox" value="" class="genre-picker-addProd" id="genre-Metal">Metal
            </label>
            <br>
            <label>
                <input type="checkbox" value="" class="genre-picker-addProd" id="genre-Pop">Pop
            </label>
            <br>
            <label>
                <input type="checkbox" value="" class="genre-picker-addProd" id="genre-Punk">Punk
            </label>
            <br>
            <label>
                <input type="checkbox" value="" class="genre-picker-addProd" id="genre-Rap">Rap
            </label>
            <br>
            <label>
                <input type="checkbox" value="" class="genre-picker-addProd" id="genre-Rock">Rock
            </label>
        </div>
        <div class="grid-item">
            <label for="PrdType">Product Type / Types:</label>
            <br>

            <input type="checkbox" id="PrdType-CD" class="product-type-picker" >
            <label for="PrdType-CD">Cd</label>
            <br>
            <input type="checkbox" id="PrdType-VINYL" class="product-type-picker">
            <label for="PrdType-VINYL" >Vinyl</label>
            <br>
            <input type="checkbox" id="PrdType-EP" class="product-type-picker">
            <label for="PrdType-EP" >EP</label>
            <br>
            <input type="checkbox" id="PrdType-MERCH" class="product-type-picker">
            <label for="PrdType-MERCH">Merch</label>
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
        <div class="grid-item"><label class="container">On sale:
                <br>
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label></div>
        <div class="grid-item">
            <label for="SaleAMT">Sale amount:</label>
            <br>
            <input type="text" id="SaleAMT" name="SaleAMT">
        </div>    <!-- This needs to only be selectable if the Sale Box is checked -->
        <div class="grid-item"><label for="QTAv">Quantity available:</label>
            <br>
            <input type="text" id="QTAv" name="QTAv">
        </div>
        <div class="grid-item">
            <label> Product Image</label>
            <form action="upload.php" method="post" enctype="multipart/form-data">

                <label for="fileToUpload">
                    <div class="product-img-change">
                        <img src="assets/TaylorSwift-1989TaylorsVersion-Product-pop.png" id="product-img-to-be-changed">
                        <span class="glyphicon glyphicon-camera"></span>
                        <span>Change Image</span>
                    </div>
                </label>
                <input type="File" name="fileToUpload" id="fileToUpload">


        </div>
        </form>







        <!-- Instead make it a hover effect on the image to change it -->
        <div class="grid-item"><label for="checkSave">Save changes</label>
            <br>
            <input type="submit" value="Save Changes">

            <input type="reset" id="resetChanges" value="Reset to default">
            <br>
            <br>
            <br>
            <input type="button" value="Remove Product">

            <br>
            <br>
            <input type="button" value="Go Back">
        </div>
    </div>








</div>




<script src="main.js"> </script>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>




</html>