<?php
	require_once('phpscripts/init.php');
	confirm_logged_in(); //session will fully log out if you shut down entire browser, not just by closing tab
	admin_only();

	$id = $_SESSION['users_creds'];
	$userlevel = $_SESSION['users_level'];
	$lastSession = $_SESSION['users_time'];

	date_default_timezone_set('America/New_York');
	$hour = date('G');

?>


<?php include('includes/header.php') ?>

<h1>Edit Learn Page</h1>
<?php include('edit_stats.php') ?>
<?php include('edit_mythfact.php') ?>
<?php include('includes/footer.php') ?>