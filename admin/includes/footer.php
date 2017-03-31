<?php	
	$id = $_SESSION['users_creds'];
	$userlevel = $_SESSION['users_level'];
	$lastSession = $_SESSION['users_time'];

	date_default_timezone_set('America/New_York');
	$hour = date('G');
?>

	<footer>
		<div id="lastLog">
				<p>Your last login was on: <?php echo $lastSession ?></p>
		</div>
	</footer>
</body>
</html>