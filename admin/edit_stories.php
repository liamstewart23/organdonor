<?php
	require_once('phpscripts/init.php');
	confirm_logged_in(); //comment out so you can test page without having to login

	

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome Company Name</title>
<link rel="stylesheet" href="css/main.css"/>
</head>

	<body>
	<h1>Setup Account Password</h1>
		<?php if(!empty($message)){echo $message;} ?>
		<form action="edit_stories.php" method="post">

			<div class="upForm">
				<label>Name:</label><br>
				<input type="text" name="name"><br>

				<label>Age:</label><br>
				<input type="text" name="age"><br>

				<label>City:</label><br>
				<input type="text" name="city"><br>

				<label>Situation:</label><br>
				<input type="text" name="summary"><br>

				<label>Written Story:</label><br>
				<input type="text" name="story"><br>

				<label>Youtube Embeded Link:</label><br>
				<input type="text" name="video"><br>

				<?php 

				?>


			</div>

			<div class="logoff">
				<input type="submit" name="submit" value="Change Password">
			</div>

		</form>

	</body>
</html>