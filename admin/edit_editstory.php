<?php
	require_once('phpscripts/init.php');
	confirm_logged_in(); //comment out so you can test page without having to login

	if (empty($_GET['id'])){//prevent people from typing in admin_editstory with no id
		redirect_to('edit_stories.php');
	}

	$id = $_GET['id'];
	$tbl = 'tbl_stories';
	$col = 'story_id';
	$getStories = getTable($tbl, $col, $id);

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

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome Company Name</title>
<link rel="stylesheet" href="css/main.css"/>
</head>

	<body>
	<h1>Stories</h1>
		<?php if(!empty($message)){echo $message;} ?>
		<form action="edit_stories.php" method="post">
		<h2>Add a New Story</h2>

			<div class="upForm">
				<label>Name:</label><br>
				<input type="text" name="name" value="<?php echo $getStories['story_name']; ?>"><br>

				<label>Age:</label><br>
				<input type="text" name="age" value="<?php echo $getStories['story_age']; ?>"><br>

				<label>City:</label><br>
				<input type="text" name="city" value="<?php echo $getStories['story_city']; ?>"><br>

				<label>Organ:</label><br>
				<input type="text" name="organ" value="<?php echo $getStories['story_organ']; ?>"><br>

				<label>Written Story:</label><br>
				<input type="text" name="story" value="<?php echo $getStories['story_text']; ?>"><br>

				<label>Youtube Embeded Link:</label><br>
				<input type="text" name="video" value="<?php echo $getStories['story_link']; ?>"><br>

				<?php 

				?>
			</div>

			<div class="addbtn">
				<input type="submit" name="submit" value="Save Changes">
			</div>

		</form>

	</body>
</html>