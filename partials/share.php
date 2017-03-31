<?php
	require_once('../admin/phpscripts/init.php');
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
		$status = "pending";
		$addStory = addStory($name,$email,$city,$organ,$photo,$thumb,$story,$video,$type,$status);
		$message = $addStory;
		if ($message == 1){//if story was successfully added
				redirect_to('../#/share');
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
		$status = "pending";
		$addStory = addStory($name,$email,$city,$organ,$photo,$thumb,$story,$video,$type,$status);
		$message = $addStory;
		if ($message == 1){//if story was successfully added
				redirect_to('../#/share');
		}
	}
?>
<!-- <!doctype html> -->
<!-- Doctype for partial html validation testing  -->
<section id="share">
	<h2 class="hidden">Because a Donor Website - Share your story and help raise awareness for Organ Donation</h2>
	<div class="row">
		<div class="col-xs-12 col-md-12 banner" id="bannerShare1">
			<div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
				<img src="img/icons/speech.svg" height="0" alt="Because a Donor" id="iconShare">
				<h3 class="bannerHeading">Share the Message</h3>
				<p>Have you or a loved one had an experience with organ donation?<br>Want us to share your story? Click the button bellow to find our how to share your video or written story to help raise awareness.</p>
				
				<!-- 				<div class="col-xs-12 col-sm-offset-0 col-md-12">
					<a href="#" class="btnB1" id="btnShareStory">share your story</a>
				</div> -->
				<div class="col-xs-12 col-md-12 text-center">
					<?php include("arrow-down.html") ?>
				</div>
				
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-12 col-md-6 text-center" id="twitter">
		<div class="col-xs-12 col-md-12 col-md-10 col-md-offset-1">
			<h4>Spread the Word</h4>
			<p>Join our Twitter community with our hashtag <a class="red" href="https://twitter.com/search?q=%40becauseadonor&src=typd" target="_blank">#becauseadonor</a>. Help to spread awareness by sharing your story, or use one of our tweets below!</p>
			<div class="premadeTweets">
				<p id="tweet">“Today I became an organ donor. Join me! #becauseadonor”</p>
				<div class="col-xs-12 col-md-12">
					<a href="https://twitter.com/intent/tweet?url=http://becauseadonor.ca&text=Today%20I%20became%20an%20organ%20donor.%20Join%20me!%20%23becauseadonor" target="_blank" class="btnB1" id="tweetLink">Tweet it!</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-12">
				<i class="fa fa-twtitter fa-5x" aria-hidden="true"></i>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-12 col-md-6 text-center" id="facebook">
		<div class="col-xs-12 col-md-12 col-md-10 col-md-offset-1">
			<h4>Show Your Support</h4>
			<p>Start a movement with your community.<br>Use our generator to use our profile photo filter below!</p>
			<div class="fbPP text-center">
				<div class="col-xs-12 col-md-12">
					<a href="https://www.isupportcause.com/campaign/because-a-donor" target="_blank"><img src="img/share/filters/profile_filter_Im-a-donor.png" alt="because a donor profile filters" class="img-responsive fbPPExample"></a><br>
					<a href="https://www.isupportcause.com/campaign/because-a-donor" target="_blank" class="btnB2" id="btnFBPP">Login with Facebook</a>
				</div>
			</div>
		</div>
	</div>
			<div class="col-xs-12 col-md-12 text-center" id="shareArrow">
			<?php include("arrow-down.html") ?>
		</div>
	<div class="col-xs-12 col-md-12 text-center" id="shareMerch">
	hello world
	</div>
	<div class="col-xs-12 col-md-12 banner" id="shareStoryBanner">
		<div class="col-xs-12 col-sm-offset-0 col-md-6 col-md-offset-3 text-center">
			<img src="img/icons/speech.svg" height="0" alt="Because a Donor" id="iconShare2">
			<h3 class="bannerHeading">Tell Us Your Story</h3>
			<p>Help inspire Canadians become organ donors by sharing your story. To help you out, we’ve outlined some talking points to make sure you’re story is as effective as possible.</p>
		</div>
	</div>
<div class="col-xs-12 text-center" id="shareStory">
		<h3>Share Your Story</h3>


 <div class="tab-container">
    <ul class="nav nav-tabs">
       <li class="active"><a data-target="#writtenStory" data-toggle="tab">Written Story</a></li>
       <li><a data-target="#videoStory" data-toggle="tab">Video Story</a></li>
    </ul>
 <div class="tab-content">
    <div class="tab-pane active cont" id="writtenStory">
<div id="written-form">


			<?php if(!empty($message)){echo $message;} ?>

<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name:</label>  
  <div class="col-md-4">
  <input id="name" name="name" placeholder="John Smith" class="form-control input-md" required="" type="text" value="<?php if(!empty($name)){echo $name;} ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email:</label>  
  <div class="col-md-4">
  <input id="email" name="email" placeholder="johnsmith@gmail.com" class="form-control input-md" required="" type="email" value="<?php if(!empty($email)){echo $email;} ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">City:</label>  
  <div class="col-md-4">
  <input id="city" name="city" placeholder="Toronto, ON" class="form-control input-md" type="text" value="<?php if(!empty($city)){echo $city;} ?>">    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="organ">Organ:</label>  
  <div class="col-md-4">
  <input id="organ" name="organ" placeholder="Recieved / Donated..." class="form-control input-md" type="text" value="<?php if(!empty($organ)){echo $organ;} ?>">
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="photo">Donor/Recipient Photo:</label>
  <div class="col-md-4">
    <input id="photo" name="photo" class="input-file" type="file" value="<?php if(!empty($photo)){echo $photo;} ?>">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="story">Written Story:</label>
  <div class="col-md-4">                     
    <textarea id="story" name="story"><?php if(!empty($story)){echo $story;} ?></textarea>
  </div>
</div>
					<div class="submit-btn">
						<input type="submit" name="submitVideo" value="Add Story">
					</div>
</form>







			</div>
     </div>



     <div class="tab-pane cont" id="videoStory">
			 <div id="video-form">



<?php if(!empty($message)){echo $message;} ?>
<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name:</label>  
  <div class="col-md-4">
  <input id="name" name="name" placeholder="John Smith" class="form-control input-md" required="" type="text" value="<?php if(!empty($name)){echo $name;} ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email:</label>  
  <div class="col-md-4">
  <input id="email" name="email" placeholder="johnsmith@gmail.com" class="form-control input-md" required="" type="email" value="<?php if(!empty($email)){echo $email;} ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">City:</label>  
  <div class="col-md-4">
  <input id="city" name="city" placeholder="Toronto, ON" class="form-control input-md" type="text" value="<?php if(!empty($city)){echo $city;} ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="organ">Organ:</label>  
  <div class="col-md-4">
  <input id="organ" name="organ" placeholder="Recieved / Donated..." class="form-control input-md" type="text" value="<?php if(!empty($organ)){echo $organ;} ?>">
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="photo">Donor/Recipient Photo:</label>
  <div class="col-md-4">
    <input id="photo" name="photo" class="input-file" type="file" value="<?php if(!empty($photo)){echo $photo;} ?>">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="story">Video Story:</label>
  <div class="col-md-4">
    <input id="organ" name="video" placeholder="Link to YouTube / Vimeo" class="form-control input-md" type="text" value="<?php if(!empty($video)){echo $video;} ?>">
  </div>
</div>
					<div class="submit-btn">
						<input type="submit" name="submitVideo" value="Add Story">
					</div>
</form>

				</div>
     </div>
  </div>
</div>

			</div>
		</section>



