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
		<nav>
			<div>
				<a href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
			</div>
		</nav>


		<div class="contentCon">
			<h1><?php 	if ($hour >= 5 && $hour < 12) {echo "Good Morning";} 
						else if ($hour >= 12 && $hour < 16) {echo "Good Afternoon";}
						else if ($hour >= 16 || $hour < 5) {echo "Good Evening";}?>,
				<?php echo $_SESSION['users_name'];?>! 
				Welcome to the 
				<?php if ($userlevel == 1){ echo "Editor"; }
					  else if($userlevel == 2){ echo "Admin"; }
					  else if($userlevel == 3){ echo "Super Admin"; } ?>'s Panel.
			</h1>
		</div>

		<div id="admin-home">			
			<?php 	if($userlevel == 1){
						echo 	"<div>
									<a href=\"edit_stories.php\">Stories</a>
								</div>
								<div>
									<a href=\"edit_stats.php\">Statistics</a>
								</div>
								<div>
									<a href=\"edit_mythfact.php\">Myths vs Facts</a>
								</div>
								<div>
									<a href=\"edit_social.php\">Facebook &amp; Twitter</a>
								</div>";
					}else if($userlevel == 2 || $userlevel == 3){
						echo 	"<div>
									<a href=\"edit_home.php\">Home</a>
								</div>
								<div>
									<a href=\"edit_learn.php\">Learn</a>
								</div>
								<div>
									<a href=\"edit_stories.php\">Stories</a>
								</div>
								<div>
									<a href=\"edit_share.php\">Share</a>
								</div>";
						if($userlevel == 3){
							echo	"<div>
										<a href=\"admin_users.php\">Users</a>
									</div>
									<div>
										<a href=\"admin_settings.php\">Settings</a>
									</div>";
						}
					}
				?>
		</div>

		<div id="lastLog">
			<p>Your last login was on: <?php echo $lastSession ?></p>
		</div>

	</body>
</html>