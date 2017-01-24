<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge,IE=9,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Organ</title>
        <!--<link rel="icon" type="image/x-icon" href="favicon.ico" />-->
        <meta name="author" content="Liam Stewart">
        <meta name="description" content="">
        <meta name="HandheldFriendly" content="True" />
        <!--<link rel="canonical" href="" />-->
        <meta property="og:title" content="">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="en_US"/>
        <!--<meta property="og:image" content="img/social-logo.png">-->
        <!--<meta property="og:url" content="">-->
        <meta property="og:description" content="">
        <meta name="twitter:card" content="summary">
        <!--<meta name="twitter:url" content="">-->
        <meta name="twitter:title" content="">
        <!--<meta name="twitter:image" content="img/social-logo.png">-->
        <meta name="rating" content="General" />
        <meta name="distribution" content="Global" />
        <meta name="revisit-after" content="1 days">
        <meta name="language" content="english">
        <meta name="googlebot" content="noodp">
        <meta name="fragment" content="!">
        
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,900|Roboto:400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body ng-app="OrganDonor">
        <h1 class="hidden">Organ Donor</h1>
        <?php include 'includes/header.php';?>
        <div ng-view class="container-fluid" id="page">
            
        </div>
        <script src="js/vendor/angular.min.js"></script>
        <script src="js/vendor/angular-route.min.js"></script>
        <script src="js/vendor/TweenMax.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>