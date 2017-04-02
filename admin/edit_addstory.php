<?php require_once('phpscripts/init.php');

	if (empty($_GET['type'])){//prevent people from typing in admin_edituser with no id
		redirect_to('index.php?partial=admin_stories');
	}

	$type = $_GET['type'];

	if(isset($_POST['submit'])){
		$name = trim($_POST['name']);
		$city = trim($_POST['city']);
		$organ = trim($_POST['organ']);
		$photo = $_FILES['photo']['name'];
		$thumb = "th_{$photo}";
		$video = "";
		$story = "";
		$status = $_POST['status'];
		if($type == "written"){
			$story = trim($_POST['story']);
			$addStory = addStory($name,$city,$organ,$photo,$thumb,$story,$video,$type,$status);
			$message = $addStory;
		}else if($type == "video"){
			$video = trim($_POST['video']);
			$addStory = addStory($name,$city,$organ,$photo,$thumb,$story,$video,$type,$status);
			$message = $addStory;
		}

		if ($message == 1){//if story was successfully added
				redirect_to('index.php?partial=edit_stories');
		}
	}
?>


	<h1>Stories</h1>
		<?php if(!empty($message)){echo $message;} ?>
		<?php echo "<form action=\"index.php?partial=edit_addstory&type={$type}\" method=\"post\" enctype=\"multipart/form-data\">"; ?>
		<h2>Add a New Story</h2>

			<div class="upForm">
				<label>Name:</label><br>
				<input required type="text" name="name" value="<?php if(!empty($name)){echo $name;} ?>"><br>

				<label>City:</label><br>
				<input required type="text" name="city" value="<?php if(!empty($city)){echo $city;} ?>"><br>

				<label>Organ:</label><br>
				<input required type="text" name="organ" value="<?php if(!empty($organ)){echo $organ;} ?>"><br>

				<label>Photo:</label><br>
				<input required type="file" name="photo" value="<?php if(!empty($photo)){echo $photo;} ?>"><br>

				<?php 
					if($type == "written"){
						echo 	"<label>Written Story:</label><br>
								<textarea required type=\"text\" name=\"story\" value=\"\";>";
								if(!empty($story)){echo $story;}
						echo 	"</textarea><br>";
					}else if ($type == "video"){
						echo 	"<label>Youtube Embeded Link:</label><br>
								<input required type=\"text\" name=\"video\" value=\"\";>";
								if(!empty($video)){echo $video;}
						echo 	"<br>";
					}
				?>

				<label>Do you wish to post this story to the site right away?</label><br>
				<select name="status" required ><br>
					<option value="">Options</option><!--forces user to choose an option-->
					<option value="pending">No, place story in pending section for review</option>
					<option value="posted">Yes, post this story to the site</option>
				</select>
			</div>

			<div class="addbtn">
				<input type="submit" name="submit" value="Add Story">
			</div>

		</form>