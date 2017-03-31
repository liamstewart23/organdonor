<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();
	admin_only();

	ini_set('display_errors',1);
	error_reporting(E_ALL);

	$tbl = "tbl_user";
	$fetchUsers = getAll($tbl);

?>
<?php include('includes/header.php') ?>
	<body>
	<div>
		<h2>Add New User</h2>
		<a href="admin_createuser.php">Add New User</a><br><br>
	</div>
	



	<h2>Edit User Account</h2>
		<?php
			if(!is_string($fetchUsers)){
				while($row = mysqli_fetch_array($fetchUsers)){
					echo "<p>{$row['user_fname']} {$row['user_lname']}</p>
						 <a href=\"admin_edituser.php?id={$row['user_id']}\">Edit</a><br><br>";
				}
			}else{
				echo "<p>{$fetchUsers}</p>";
			}
		?>

	</body>
</html>