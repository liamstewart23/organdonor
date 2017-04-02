<?php
    require_once('phpscripts/init.php');
    confirm_logged_in(); //session will fully log out if you shut down entire browser, not just by closing tab

    $id = $_SESSION['users_creds'];
    $userlevel = $_SESSION['users_level'];
    $lastSession = $_SESSION['users_time'];

    date_default_timezone_set('America/New_York');
    $hour = date('G');

?>


<?php include('includes/header.php'); ?>

<?php 
            if (isset($_GET['partial'])) {
                $partial =  $_GET['partial'];
                include $partial.'.php';
            }
            else {
                include 'admin_index.php';
            }

?>

<?php include('includes/footer.php'); ?>