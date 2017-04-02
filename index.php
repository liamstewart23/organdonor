<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    include('admin/phpscripts/init.php');
    //BANNERS
    $tbl = 'tbl_banners';
    $col = 'banner_id';
    $id = '1';
    $getRegisterB = getTable($tbl, $col, $id);

    $id = '2';
    $getLearnB = getTable($tbl, $col, $id);

    $id = '3';
    $getStoriesB = getTable($tbl, $col, $id);

    $id = '4';
    $getShareB = getTable($tbl, $col, $id);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge,IE=9,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Because a Donor - Organ Donation Awareness | Ontario Canada</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <meta name="author" content="Liam Stewart, www.liamstewart.ca">
        <meta name="description" content="">
        <meta name="HandheldFriendly" content="True" />
        <!-- <link rel="canonical" href="https://becauseadonor.ca" /> -->
        <meta property="og:title" content="Because a Donor - Organ Donation Awareness | Ontario Canada">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="en_US"/>
        <!-- <meta property="og:image" content="img/social-logo.png"> -->
        <!--  <meta property="og:url" content="https://becauseadonor.ca"> -->
        <meta property="og:description" content="">
        <meta name="twitter:card" content="summary">
        <!-- <meta name="twitter:url" content="https://becauseadonor.ca"> -->
        <meta name="twitter:title" content="">
        <!--   <meta name="twitter:image" content="img/social-logo.png"> -->
        <meta name="keywords" content="because a donor, donor, organ, organs, donor, donation, recipient, recipients, donations, trillium, becauseadonor, ontario, canada" />
        <meta name="rating" content="General" />
        <meta name="distribution" content="Global" />
        <meta name="revisit-after" content="7 days">
        <meta name="language" content="english">
        <meta name="googlebot" content="noodp">
        <meta name="fragment" content="!">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="img/favicons/favicon-194x194.png" sizes="194x194">
        <link rel="icon" type="image/png" href="img/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="img/favicons/manifest.json">
        <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#945db7">
        <link rel="shortcut icon" href="img/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#945db7">
        <meta name="msapplication-TileImage" content="img/favicons/mstile-144x144.png">
        <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,700|Fjalla+One|Oswald:200" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/site/app.css">
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    </head>
    <body ng-app="BecauseADonor">
        <h1 class="hidden">Because a Donor - Organ Donation Awareness | Ontario Canada</h1>
        <?php include 'partials/header.php';?>
        <div ng-view class="container-fluid" id="page">
            <noscript>
            <link rel="stylesheet" href="css/site/no-js.css">
            <?php
            if (isset($_GET['partial'])) {
                $partial =  $_GET['partial'];
                include 'partials/'.$partial.'.php';
            }
            else {
                include 'partials/home.php';
            }?>
            </noscript>
        </div>
        <?php include 'partials/footer.php';?>
        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/angular.min.js"></script>
        <script src="js/vendor/angular-route.min.js"></script>
        <script src="js/vendor/TweenMax.min.js"></script>
        <script src="js/app.js"></script>
    </body>
    <!-- Website developed by Liam Stewart and Lauren Koza - 2017 -->
</html>