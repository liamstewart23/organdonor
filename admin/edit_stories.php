<?php
	require_once('phpscripts/init.php');
	confirm_logged_in(); //comment out so you can test page without having to login

	if (isset($_POST['submit'])){
		$name = trim($_POST['name']);
		$age = trim($_POST['age']);
		$city = trim($_POST['city']);
		$organ = trim($_POST['organ']);
		$story = trim($_POST['story']);
		$video = trim($_POST['video']);
		$addStory = addStory($name,$age,$city,$organ,$story,$video);
	}

	$tbl = 'tbl_stories';
	$getStories = getAll($tbl);

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
				<input type="text" name="name"><br>

				<label>Age:</label><br>
				<input type="text" name="age"><br>

				<label>City:</label><br>
				<input type="text" name="city"><br>

				<label>Organ:</label><br>
				<input type="text" name="organ"><br>

				<label>Written Story:</label><br>
				<input type="text" name="story"><br>

				<label>Youtube Embeded Link:</label><br>
				<input type="text" name="video"><br>

				<?php 

				?>
			</div>

			<div class="addbtn">
				<input type="submit" name="submit" value="Add Story">
			</div>

			<div>
			<h2>Edit Stories</h2>
				<?php 
					if(!is_string($getStories)){
						while($row = mysqli_fetch_array($getStories)){
							echo "<h3>{$row['story_name']}, {$row['story_age']}</h3>
								<p>{$row['story_city']}</p>
								<p>{$row['story_organ']}</p>
								<a href=\"admin_editstory.php?id={$row['story_id']}\">Edit Story</a><br><br>";
						}
					}else{
						echo "<p>{$getStories}</p>";
					}
				?>
			</div>

		</form>

	</body>
</html>