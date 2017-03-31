<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();

	if (empty($_GET['id'])){//prevent people from typing in admin_editstory with no id
		redirect_to('edit_stories.php');
	}

	$id = $_GET['id'];

	$tbl = 'tbl_stories';
	$col = 'story_id';
	$getStories = getTable($tbl, $col, $id);
	$type = $getStories['story_type'];

	if(isset($_POST['submit'])){
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$city = trim($_POST['city']);
		$organ = trim($_POST['organ']);
		$photo = $_FILES['photo']['name'];
		$video = "";
		$story = "";
		$status = $_POST['status'];
		if($type == "written"){
				$story = trim($_POST['story']);
				$editStory = editStory($id,$name,$email,$city,$organ,$photo,$story,$video,$status);
				$message = $editStory;

			}else if($type == "video"){
				$video = trim($_POST['video']);
				$editStory = editStory($id,$name,$email,$city,$organ,$photo,$story,$video,$status);
				$message = $editStory;
			}
		if ($message == 1){//if story was successfully added
				redirect_to('edit_stories.php');
		}
	}

?>

<?php include('includes/header.php') ?>

	<h1>Stories</h1>
		<?php if(!empty($message)){echo $message;} ?>
		<?php echo "<form action=\"edit_editstory.php?id={$id}\" method=\"post\" enctype=\"multipart/form-data\">"?>
		<h2>Add a New Story</h2>

			<div class="upForm">
				<label>Name:</label><br>
				<input type="text" name="name" value="<?php echo $getStories['story_name']; ?>"><br>

				<label>Email:</label><br>
				<input type="email" name="email" value="<?php echo $getStories['story_email']; ?>"><br>

				<label>City:</label><br>
				<input type="text" name="city" value="<?php echo $getStories['story_city']; ?>"><br>

				<label>Organ:</label><br>
				<input type="text" name="organ" value="<?php echo $getStories['story_organ']; ?>"><br>

				<label>Photo</label><br>
				<p><?php echo $getStories['story_photo']; ?></p>
				<input type="file" name="photo" value="<?php echo $getStories['story_photo']; ?>"><br>

				<?php 
					if($getStories['story_type'] == "written"){
						echo 	"<label>Written Story:</label><br>
								<textarea required type=\"text\" name=\"story\">";
						echo 	$getStories['story_text'];
						echo	"</textarea><br>";
					}else if ($getStories['story_type'] == "video"){
						echo 	"<label>Youtube Embeded Link:</label><br>
								<input required type=\"text\" name=\"video\" value=\"";
						echo 	$getStories['story_link'];
						echo	"\"><br>";
					}
				?>

				<p>Current Status: <?php echo $getStories['story_status']; ?></p>
				<label>Do you wish to post these edits to the site right away?</label><br>
				<select name="status" required><br>
					<option value="">Options</option><!--forces user to choose an option-->
					<option value="pending">No, place story in pending section for review</option>
					<option value="posted">Yes, post edits of this story to the site</option>
				</select>
				
			</div>

			<div class="addbtn">
				<input type="submit" name="submit" value="Save Changes">
			</div>

		</form>

