<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();

	$tbl = 'tbl_stories';
	$tblurl = 'stories';
	$col = 'story_id';
	$getPending = getAll($tbl);
	$getPosted = getAll($tbl);

	if(isset($_POST['submitWritten'])){
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$city = trim($_POST['city']);
		$organ = trim($_POST['organ']);
		$photo = $_FILES['photo']['name'];
		$thumb = "th_{$photo}";
		$video = "";
		$story = trim($_POST['story']);
		$type = "written";
		$status = $_POST['status'];
		$addStory = addStory($name,$email,$city,$organ,$photo,$thumb,$story,$video,$type,$status);
		$message = $addStory;

		if ($message == 1){//if story was successfully added
				redirect_to('edit_stories.php');
		}
	}
	if(isset($_POST['submitVideo'])){
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$city = trim($_POST['city']);
		$organ = trim($_POST['organ']);
		$photo = $_FILES['photo']['name'];
		$thumb = "th_{$photo}";
		$video = trim($_POST['video']);
		$story = "";
		$type = "video";
		$status = $_POST['status'];
		$addStory = addStory($name,$email,$city,$organ,$photo,$thumb,$story,$video,$type,$status);
		$message = $addStory;

		if ($message == 1){//if story was successfully added
				redirect_to('edit_stories.php');
		}
	}
?>
<?php include('includes/header.php') ?>
	<h1>Stories</h1>

		<!--<h2>Add a New Story</h2>
		<a href="edit_addstory.php?type=written">Written</a>
		<a href="edit_addstory.php?type=video">Video</a>-->

		<div id="addstory">
		<h2>Add New Story</h2>
			<div id="written-form">
				<?php if(!empty($message)){echo $message;} ?>
				<?php echo "<form action=\"edit_stories.php\" method=\"post\" enctype=\"multipart/form-data\">"; ?>
				<h3>Written Story</h3>
					<div class="upForm">
						<label>Name:</label><br>
						<input required type="text" name="name" value="<?php if(!empty($name)){echo $name;} ?>"><br>

						<label>Email:</label><br>
						<input type="email" name="email" value="<?php if(!empty($email)){echo $email;} ?>"><br>

						<label>City:</label><br>
						<input required type="text" name="city" value="<?php if(!empty($city)){echo $city;} ?>"><br>

						<label>Organ:</label><br>
						<input required type="text" name="organ" value="<?php if(!empty($organ)){echo $organ;} ?>"><br>

						<label>Photo:</label><br>
						<input required type="file" name="photo" value="<?php if(!empty($photo)){echo $photo;} ?>"><br>

						<label>Written Story:</label><br>
						<textarea required type="text" name="story" value=""><?php if(!empty($story)){echo $story;} ?></textarea><br>

						<label>Do you wish to post this story to the site right away?</label><br>
						<select name="status" required ><br>
							<option value="">Options</option><!--forces user to choose an option-->
							<option value="pending">No, place story in pending section for review</option>
							<option value="posted">Yes, post this story to the site</option>
						</select>

					</div>
					<div class="submit-btn">
						<input type="submit" name="submitWritten" value="Add Story">
					</div>
				</form>
			</div><!--end Written Story Form-->

			<div id="video-form">
				<?php if(!empty($message)){echo $message;} ?>
				<?php echo "<form action=\"edit_stories.php\" method=\"post\" enctype=\"multipart/form-data\">"; ?>
				<h3>Video Story</h3>
					<div class="upForm">
						<label>Name:</label><br>
						<input required type="text" name="name" value="<?php if(!empty($name)){echo $name;} ?>"><br>

						<label>City:</label><br>
						<input required type="text" name="city" value="<?php if(!empty($city)){echo $city;} ?>"><br>

						<label>Organ:</label><br>
						<input required type="text" name="organ" value="<?php if(!empty($organ)){echo $organ;} ?>"><br>

						<label>Photo:</label><br>
						<input required type="file" name="photo" value="<?php if(!empty($photo)){echo $photo;} ?>"><br>

						<label>Youtube Embeded Link:</label><br>
						<input required type="text" name="video" value="<?php if(!empty($video)){echo $video;} ?>"><br>

						<label>Do you wish to post this story to the site right away?</label><br>
						<select name="status" required ><br>
							<option value="">Options</option><!--forces user to choose an option-->
							<option value="pending">No, place story in pending section for review</option>
							<option value="posted">Yes, post this story to the site</option>
						</select>
					</div>
					<div class="submit-btn">
						<input type="submit" name="submitVideo" value="Add Story">
					</div>
				</form>
			</div><!--end Video Story Form-->
		</div><!--end Add New Story-->

		<div>
		<h2>Pending Stories</h2>
			<?php 
				if(!is_string($getPending)){
					while($row = mysqli_fetch_array($getPending)){
						if($row['story_status'] == "pending"){
						echo "<h3>{$row['story_name']}</h3>
							<p>{$row['story_city']}</p>
							<p>{$row['story_organ']}</p>
							<a href=\"edit_editstory.php?id={$row['story_id']}\">Edit Story</a><br><br>
							<a href=\"edit_delete.php?table={$tbl}&col={$col}&id={$row['story_id']}\">Delete Story</a><br><br>";
						}
					}
				}else{
					echo "<p>{$getStories}</p>";
				}
			?>
		</div>

		<div>
		<h2>Posted Stories</h2>
			<?php 
				if(!is_string($getPosted)){
					while($row = mysqli_fetch_array($getPosted)){
						if($row['story_status'] == "posted"){
						echo "<h3>{$row['story_name']}</h3>
							<p>{$row['story_city']}</p>
							<p>{$row['story_organ']}</p>
							<a href=\"edit_editstory.php?id={$row['story_id']}\">Edit Story</a><br><br>
							<a href=\"edit_delete.php?table={$tbl}&col={$col}&id={$row['story_id']}\">Delete Story</a><br><br>";
						}
					}
				}else{
					echo "<p>{$getStories}</p>";
				}
			?>
		</div>