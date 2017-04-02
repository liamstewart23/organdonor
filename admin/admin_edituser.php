<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();
	superadmin_only();
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	if (empty($_GET['id'])){//prevent people from typing in admin_edituser with no id
		redirect_to('admin_users.php');
	}

	$id = $_GET['id'];
	$popForm = getUser($id);

	if(isset($_POST['submit'])){
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);

		$result = editUser($id, $fname, $lname, $username, $password, $email);			
		$message = $result;
	}
?>

	<section>
	<h1>Edit User Account</h1>
		<?php if(!empty($message)){echo $message;} ?>
		<form action="admin_edituser.php?id=<?php echo $popForm['user_id']; ?>" method="post">
			<div class="upForm">
				<label>First Name:</label><br>
				<input type="text" name="fname" value="<?php echo $popForm['user_fname']; ?>"><br>
				<label>Last Name:</label><br>
				<input type="text" name="lname" value="<?php echo $popForm['user_lname']; ?>"><br>
				<label>Username:</label><br>
				<input type="text" name="username" value="<?php echo $popForm['user_username']; ?>"><br>
				<label>Password:</label><br>
				<input type="text" name="password" value="<?php echo $popForm['user_password']; ?>"><br>
				<label>Email:</label><br>
				<input type="text" name="email" value="<?php echo $popForm['user_email']; ?>">
			</div>			
			<br><br>
			<input type="submit" name="submit" value="Apply Changes">

		</form>
	</section>
	</body>
</html>