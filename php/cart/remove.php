<?php

require '../update_cart.php';

remove_from_cart($_GET['productid']);

header("Location:../../cart.php");
