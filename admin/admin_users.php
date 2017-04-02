<?php
	admin_only();

	ini_set('display_errors',1);
	error_reporting(E_ALL);

	$tbl = "tbl_user";
	$fetchUsers = getAll($tbl);

?>
	<body>
	<div>
		<h2>Add New User</h2>
		<a href="index.php?partial=admin_createuser">Add New User</a><br><br>
	</div>
	



	<h2>Edit User Account</h2>
		<?php
			if(!is_string($fetchUsers)){
				while($row = mysqli_fetch_array($fetchUsers)){
					echo "<p>{$row['user_fname']} {$row['user_lname']}</p>
						 <a href=\"index.php?partial=admin_edituser&id={$row['user_id']}\">Edit</a><br><br>";
				}
			}else{
				echo "<p>{$fetchUsers}</p>";
			}
		?>

	</body>
</html>