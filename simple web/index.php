<!DOCTYPE html>
<html lang="en">
<?php /*include('php/head.php') */?>


<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Simple Ecommerce Website</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<!-- ##### Header Area Start ##### -->
<?php include('php/header.php'); ?>
<!-- ##### Header Area End ##### -->

<!-- ##### Right Side Cart Area ##### -->
<?php include('php/rightSideCart.php'); ?>
<!-- ##### Right Side Cart End ##### -->

<!-- ##### Welcome Area Start ##### -->
<?php include('php/welcomArea.php'); ?>
<!-- ##### Welcome Area End ##### -->

<!-- ##### Top Catagory Area Start ##### -->
<?php include ('php/topCategory.php');?>
<!-- ##### Top Catagory Area End ##### -->

<!-- ##### CTA Area Start ##### -->
<?php include ('php/ctaArea.php');?>

<!-- ##### CTA Area End ##### -->

<!-- ##### New Arrivals Area Start ##### -->
<?php include('php/newArrivalArea.php');?>
<!-- ##### New Arrivals Area End ##### -->

<!-- ##### Brands Area Start ##### -->
<?php include ('php/brandArea.php');?>
<!-- ##### Brands Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<?php include ('php/footer.php');?>
<!-- ##### Footer Area End ##### -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Classy Nav js -->
<script src="js/classy-nav.min.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>
<?php /*include ('php/javascript.php')*/?>

</body>

</html>