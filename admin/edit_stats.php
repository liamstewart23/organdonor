<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();


	if(isset($_POST['submit'])){
		$name = trim($_POST['name']);
		$age = trim($_POST['age']);
		$city = trim($_POST['city']);
		$photo = trim($_POST['photo']);
		$organ = trim($_POST['organ']);
		$story = trim($_POST['story']);
		$video = trim($_POST['video']);

		$addStory = addStory($name,$age,$city,$organ,$photo,$story,$video);			
		$message = $addStory;
	}

	$tbl = 'tbl_stories';
	$tblurl = 'stories';
	$col = 'story_id';
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

				<label>Photo:</label><br>
				<input type="file" name="photo"><br>

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
								<a href=\"edit_editstory.php?id={$row['story_id']}\">Edit Story</a><br><br>
								<a href=\"edit_delete.php?table={$tblurl}&col={$col}&id={$row['story_id']}\">Delete Story</a><br><br>";
						}
					}else{
						echo "<p>{$getStories}</p>";
					}
				?>
			</div>

		</form>

	</body>
</html>