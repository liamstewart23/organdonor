<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge,IE=9,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Because a Donor - Organ Donation Awareness | Ontario Canada</title>
        <!-- <link rel="icon" type="image/x-icon" href="favicon.ico" /> -->
        <meta name="author" content="Liam Stewart, www.liamstewart.ca">
        <meta name="description" content="">
        <meta name="HandheldFriendly" content="True" />
        <!-- <link rel="canonical" href="#" /> -->
        <meta property="og:title" content="Because a Donor - Organ Donation Awareness | Ontario Canada">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="en_US"/>
        <!-- <meta property="og:image" content="img/social-logo.png"> -->
       <!--  <meta property="og:url" content="#"> -->
        <meta property="og:description" content="">
        <meta name="twitter:card" content="summary">
        <!-- <meta name="twitter:url" content="#"> -->
        <meta name="twitter:title" content="">
      <!--   <meta name="twitter:image" content="img/social-logo.png"> -->
      <meta name="keywords" content="" />
        <meta name="rating" content="General" />
        <meta name="distribution" content="Global" />
        <meta name="revisit-after" content="7 days">
        <meta name="language" content="english">
        <meta name="googlebot" content="noodp">
        <meta name="fragment" content="!">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,700|Fjalla+One|Oswald:200,400" rel="stylesheet"> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/site/app.css">
        <script src="https://use.fontawesome.com/380411a7d6.js"></script>
    </head>
    <body ng-app="BecauseADonor">
        <h1 class="hidden">Because a Donor - Organ Donation Awareness | Ontario Canada</h1>
        <?php include 'partials/header.php';?>
        <div ng-view class="container-fluid" id="page">
            <noscript>
            <link rel="stylesheet" href="css/site/no-js.css"><!-- Brings in classes for when js is disabled -->
            <?php
            if (isset($_GET['partial'])) {//If partial is in url
            $partial =  $_GET['partial'];//set variable of of partial
            // echo $_GET['partial']; // Checking for getting partial in route
            include 'partials/'.$partial.'.php';//include
            }
            else {
            include 'partials/home.php';//otherwise include
            }?>
            </noscript>
        </div>  
        <?php include 'partials/footer.php';?>
        <script src="js/vendor/jquery-3.1.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/angular.min.js"></script>
        <script src="js/vendor/angular-route.min.js"></script>
        <script src="js/vendor/TweenMax.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>