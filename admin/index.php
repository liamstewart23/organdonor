<?php
include('phpscripts/init.php');
confirm_logged_in(); //session will fully log out if you shut down entire browser, not just by closing tab
$id = $_SESSION['users_creds'];
$userlevel = $_SESSION['users_level'];
$lastSession = $_SESSION['users_time'];
date_default_timezone_set('America/New_York');
$hour = date('G');
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Because a Donor - Admin</title>
        <link rel="stylesheet" href="../css/normalize.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/app.css"/>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
                    MENU
                    </button>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" class="img-responsive" id="logo">
                       <img src="../img/logo.jpg" alt="becauseadonor">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../" target="_blank">Visit Site</a></li>
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Account
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown-header">SETTINGS</li>
                                    <li class=""><a href="#">Other Link</a></li>
                                    <li class=""><a href="#">Other Link</a></li>
                                    <li class=""><a href="#">Other Link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        </div>
                        </div>
                    </nav>      <div class="container-fluid main-container">
                    <div class="col-md-2 sidebar">
                        <div class="row">
                            <div class="absolute-wrapper"> </div>
                            <div class="side-menu">
                                <nav class="navbar navbar-default" role="navigation">
                                    <div class="side-menu-container">
                                        <ul class="nav navbar-nav">
                                            <li><a href="#"><span class=""></span> Dashboard</a></li>
                                            <li><a href="#"><span class=" -plane"></span> Active Link</a></li>
                                            <li><a href="#"><span class=" -cloud"></span> Link</a></li>
                                            <li class="panel panel-default" id="dropdown">
                                                <a data-toggle="collapse" href="#dropdown-lvl1">
                                                    <span class=" -user"></span> Sub Level <span class="caret"></span>
                                                </a>
                                                <div id="dropdown-lvl1" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <ul class="nav navbar-nav">
                                                            <li><a href="#">Link</a></li>
                                                            <li><a href="#">Link</a></li>
                                                            <li><a href="#">Link</a></li>
                                                            <li class="panel panel-default" id="dropdown">
                                                                <a data-toggle="collapse" href="#dropdown-lvl2">
                                                                    <span class=" -off"></span> Sub Level <span class="caret"></span>
                                                                </a>
                                                                <div id="dropdown-lvl2" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                        <ul class="nav navbar-nav">
                                                                            <li><a href="#">Link</a></li>
                                                                            <li><a href="#">Link</a></li>
                                                                            <li><a href="#">Link</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="#"><span class=" -signal"></span> Link</a></li>
                                        </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>          </div>
                            <div class="col-md-10 content">
                                <?php
                                if (isset($_GET['partial'])) {
                                $partial =  $_GET['partial'];
                                include $partial.'.php';
                                }
                                else {
                                include 'admin_index.php';
                                }
                                ?>
                            </div>
                            <?php
                            $id = $_SESSION['users_creds'];
                            $userlevel = $_SESSION['users_level'];
                            $lastSession = $_SESSION['users_time'];
                            date_default_timezone_set('America/New_York');
                            $hour = date('G');
                            ?>
                            <footer class="pull-left footer">
                                <div id="lastLog">
                                    <p>Your last login was on: <?php echo $lastSession ?></p>
                                </div>
                            </footer>
                        </footer>
                    </div>
                    <script src="../js/vendor/jquery.min.js"></script>
                    <script src="../js/vendor/bootstrap.min.js"></script>
                    <script src="js/app.js"></script>
                </body>
            </html>