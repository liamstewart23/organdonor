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
        <title>Admin - Because a Donor</title>
        <link rel="stylesheet" href="../css/normalize.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/app.css"/>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php" class="img-responsive" id="logo">
                        <img src="../img/logo.jpg" alt="becauseadonor">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../" target="_blank">Visit Site</a></li>
                        <li class="dropdown ">
                            <a href="index.php?partial=admin_edituser">My Account</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid main-container">
                <div class="col-md-2 sidebar">
                    <div class="row">
                        <div class="absolute-wrapper"> </div>
                        <div class="side-menu">
                            <nav class="navbar navbar-default" role="navigation">
                                <div class="side-menu-container">
                                    <ul class="nav navbar-nav">
                                        <?php   if($userlevel == 1 || $userlevel == 2 || $userlevel == 3){
                                        echo    "<li>
                                            <a href=\"index.php?partial=edit_stories\"><i class=\"fa fa-book\"></i> Stories</a>
                                        </li>
                                        <li>
                                            <a href=\"index.php?partial=edit_stats\"> <i class=\"fa fa-list-ul\"></i> Statistics</a>
                                        </li>
                                        <li>
                                            <a href=\"index.php?partial=edit_mythfact\"><i class=\"fa fa-check\"></i> Myths vs Facts</a>
                                        </li>
                                        <li>
                                            <a href=\"index.php?partial=edit_social\"><i class=\"fa fa-share-square\"></i> Facebook &amp; Twitter</a>
                                        </li>";
                                        }
                                        if($userlevel == 2 || $userlevel == 3){
                                        echo "                                            <li class=\"panel panel-default\" id=\"dropdown\">
                                            <a data-toggle=\"collapse\" href=\"#dropdown-lvl1\">
                                                <i class=\"fa fa-file\"></i> Pages <span class=\"caret\"></span>
                                            </a>
                                            <div id=\"dropdown-lvl1\" class=\"panel-collapse collapse\">
                                                <div class=\"panel-body\">
                                                    <ul class=\"nav navbar-nav\">";
                                                        echo    "<li>
                                                            <a href=\"index.php?partial=edit_home\"><i class=\"fa fa-home\"></i> Home page</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"index.php?partial=edit_learn\"><i class=\"fa fa-graduation-cap\"></i> Learn page</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"index.php?partial=edit_stories\"><i class=\"fa fa-book\"></i> Stories page</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"index.php?partial=edit_share\"><i class=\"fa fa-share-square\"></i> Share page</a>
                                                        </li> </ul>
                                                    </div>
                                                </div>
                                            </li>";
                                            if($userlevel == 3){
                                            echo    "<li>
                                                <a href=\"index.php?partial=admin_users\"><i class=\"fa fa-users\"></i> Users</a>
                                            </li>
                                            <li>
                                                <a href=\"index.php?partial=admin_settings\"><i class=\"fa fa-cogs\"></i> Settings</a>
                                            </li>";
                                            }
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
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