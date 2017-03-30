<?php
	require_once('../admin/phpscripts/init.php');

	if(isset($_POST['submitWritten'])){
		$name = trim($_POST['name']);
		$age = trim($_POST['age']);
		$city = trim($_POST['city']);
		$organ = trim($_POST['organ']);
		$photo = $_FILES['photo']['name'];
		$thumb = "th_{$photo}";
		$video = "";
		$story = trim($_POST['story']);
		$type = "written";
		$status = "pending";
		$addStory = addStory($name,$age,$city,$organ,$photo,$thumb,$story,$video,$type,$status);
		$message = $addStory;

		if ($message == 1){//if story was successfully added
				redirect_to('#/share');
		}
	}
	if(isset($_POST['submitVideo'])){
		$name = trim($_POST['name']);
		$age = trim($_POST['age']);
		$city = trim($_POST['city']);
		$organ = trim($_POST['organ']);
		$photo = $_FILES['photo']['name'];
		$thumb = "th_{$photo}";
		$video = trim($_POST['video']);
		$story = "";
		$type = "video";
		$status = "pending";
		$addStory = addStory($name,$age,$city,$organ,$photo,$thumb,$story,$video,$type,$status);
		$message = $addStory;

		if ($message == 1){//if story was successfully added
				redirect_to('#/share');
		}
	}
?>

<!-- <!doctype html> --> 
<!-- Doctype for partial html validation testing  -->
<section id="share">
	<h2 class="hidden">Because a Donor Website - Share your story and help raise awareness for Organ Donation</h2>
	<div class="row">
		<div class="col-xs-12 col-sm-offset-0 col-md-12 banner" id="bannerShare1">
			<div class="col-xs-12 col-sm-offset-0 col-md-6 col-md-offset-3 text-center">
				<img src="img/icons/speech.svg" height="0" alt="Because a Donor" id="iconShare">
				<h3 class="bannerHeading">Share the Message</h3>
				<p>Have you or a loved one had an experience with organ donation?<br>Want us to share your story? Click the button bellow to find our how to share your video or written story to help raise awareness.</p>
				
				<div class="col-xs-12 col-sm-offset-0 col-md-12">
					<a href="#" class="btnB1" id="btnShareStory">share your story</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-12 col-md-6 text-center" id="twitter">
		<div class="col-xs-12 col-md-12 col-md-10 col-md-offset-1">
			<h4>Spread the Word</h4>
			<p>Join our Twitter community with our hashtag <a class="red" href="https://twitter.com/search?q=%40becauseadonor&src=typd" target="_blank">#becauseadonor</a>. Help to spread awareness by sharing your story, or use one of our tweets below!</p>
		</div>
	</div>
	<div class="col-xs-12 col-md-12 col-md-6 text-center" id="facebook">
		<div class="col-xs-12 col-md-12 col-md-10 col-md-offset-1">
			<h4>Show Your Support</h4>
			<p>Start a movement with your community.<br>Use our generator to use our profile photo filter below!</p>
		</div>
	</div>

	<div class="col-xs-12 text-center" id="shareStory">
		<h4>Share Your Story</h4>
		<p></p>
		<div id="written-form">
			<?php if(!empty($message)){echo $message;} ?>
			<?php echo "<form action=\"#/share\" method=\"post\" enctype=\"multipart/form-data\">"; ?>
			<h2>Written Story</h2>
				<div class="upForm">
					<label>Name:</label><br>
					<input required type="text" name="name" value="<?php if(!empty($name)){echo $name;} ?>"><br>

					<label>Age:</label><br>
					<input required type="text" name="age" value="<?php if(!empty($age)){echo $age;} ?>"><br>

					<label>City:</label><br>
					<input required type="text" name="city" value="<?php if(!empty($city)){echo $city;} ?>"><br>

					<label>Organ:</label><br>
					<input required type="text" name="organ" value="<?php if(!empty($organ)){echo $organ;} ?>"><br>

					<label>Photo:</label><br>
					<input required type="file" name="photo" value="<?php if(!empty($photo)){echo $photo;} ?>"><br>

					<label>Written Story:</label><br>
					<textarea required type="text" name="story" value=""><?php if(!empty($story)){echo $story;} ?></textarea><br>

				</div>
				<div class="submit-btn">
					<input type="submit" name="submitWritten" value="Add Story">
				</div>
			</form>
		</div><!--end Written Story Form-->

		<div id="video-form">
			<?php if(!empty($message)){echo $message;} ?>
			<?php echo "<form action=\"/#/share.php\" method=\"post\" enctype=\"multipart/form-data\">"; ?>
			<h2>Video Story</h2>
				<div class="upForm">
					<label>Name:</label><br>
					<input required type="text" name="name" value="<?php if(!empty($name)){echo $name;} ?>"><br>

					<label>Age:</label><br>
					<input required type="text" name="age" value="<?php if(!empty($age)){echo $age;} ?>"><br>

					<label>City:</label><br>
					<input required type="text" name="city" value="<?php if(!empty($city)){echo $city;} ?>"><br>

					<label>Organ:</label><br>
					<input required type="text" name="organ" value="<?php if(!empty($organ)){echo $organ;} ?>"><br>

					<label>Photo:</label><br>
					<input required type="file" name="photo" value="<?php if(!empty($photo)){echo $photo;} ?>"><br>

					<label>Youtube Embeded Link:</label><br>
					<input required type="text" name="video" value="<?php if(!empty($video)){echo $video;} ?>"><br>
				</div>
				<div class="submit-btn">
					<input type="submit" name="submitVideo" value="Add Story">
				</div>
			</form>
		</div><!--end Video Story Form-->
	</div>
</section>