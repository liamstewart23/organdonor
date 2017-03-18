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


<!doctype html>

<html>
<head>
<meta charset="UTF-8">
<title>Welcome to Paddy's Secret Admin</title>
<link rel="stylesheet" href="css/main.css"/>
</head>

	<body>
		<nav>
			<div>
				<a href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
			</div>
		</nav>


		<div class="contentCon">
			<h1><?php 	if ($hour >= 5 && $hour < 12) {echo "Good Morning";} 
						else if ($hour >= 12 && $hour < 16) {echo "Good Afternoon";}
						else if ($hour >= 16 || $hour < 5) {echo "Good Evening";}?>,
				<?php echo $_SESSION['users_name'];?>! Welcome to the Admin's Panel.
			</h1>
		</div>

		<div id="admin-home">			
			<div>
				<a href="admin_createuser.php">Home</a>
			</div>
			<div>
				<a href="admin_createuser.php">Learn</a>
			</div>
			<div>
				<a href="edit_stories.php">Stories</a>
			</div>
			<div>
				<a href="admin_edituser.php">Share</a>
			</div>
				<?php 	if($userlevel == 3){
							echo 	"<div>
										<a href=\"admin_users.php\">Users</a>
									</div>
									<div>
										<a href=\"admin_users.php\">Settings</a>
									</div>";
						}
				?>
		</div>

		<div id="lastLog">
			<p>Your last login was on: <?php echo $lastSession ?></p>
		</div>

	</body>
</html>