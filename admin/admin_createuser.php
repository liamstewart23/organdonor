<?php require_once('phpscripts/init.php');
	superadmin_only();

	if(isset($_POST['submit'])){
		//echo "works";
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$username = trim($_POST['username']);
		$email = trim($_POST['email']);
		$level = $_POST['lvllist'];
		if(empty($level)){
			$message = "Please select a user level.";
		} else {
			$result = createUser($fname, $lname, $username, $email, $level);
			$message = $result;

		}
	}

?>

	<section>

	<h1>Create User Account</h1>
		<?php if(!empty($message)){echo $message;} ?>
		<form action="admin_createuser.php" method="post">

			<div class="upForm">
				<label>First Name:</label><br>
				<input required type="text" name="fname" value="<?php if(!empty($fname)){echo $fname;} ?>"><br>
			
				<label>Last Name:</label><br>
				<input required type="text" name="lname" value="<?php if(!empty($lname)){echo $lname;} ?>"><br>
				<label>Username:</label><br>
				<input required type="text" name="username" value="<?php if(!empty($username)){echo $username;} ?>"><br>
				<label>Email:</label><br>
				<input required type="text" name="email" value="<?php if(!empty($email)){echo $email;} ?>"><br>

				<select name="lvllist"><br>
					<option value="">Please Select User Level...</option><!--forces user to choose an option-->
					<option value="1">Editor</option>
					<option value="2">Admin</option>
					<option value="3">Super Admin</option>
				</select>
				<br><br>
			</div>
			<div class="loginbutton">
				<input type="submit" name="submit" value="Create User">
			</div>

		</form>
	</section>

</body>
</html>