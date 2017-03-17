<?php
	require_once('phpscripts/init.php');
	confirm_logged_in(); //session will fully log out if you shut down entire browser, not just by closing tab

	$lastSession = $_SESSION['users_time'];
	//echo $lastSession;

?>


<!doctype html>

<html>
<head>
<meta charset="UTF-8">
<title>Welcome to Paddy's Secret Admin</title>
<link rel="stylesheet" href="css/main.css"/>
</head>

	<body>
		<div class="contentCon">
			<h1>Account Creation Successful</h1>
			<p>A temporary password has been sent to the new user's email account. Please proceed to email to finish account setup.</p>
		</div>

		<div id="lastLog">
			<p>Your last login was on: <?php echo $lastSession ?></p>
		</div>

		<div id="logoff">
			<a href="admin_index.php">Back Home</a>
		</div>
		

	</body>
</html>