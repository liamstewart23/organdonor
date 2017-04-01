<?php
	$lastSession = $_SESSION['users_time'];
?>


<!doctype html>

<html>
<head>
<meta charset="UTF-8">
<title>Welcome to Paddy's Secret Admin</title>
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