<?php
	ini_set('display_errors',1);
error_reporting(E_ALL);
	require_once('../admin/phpscripts/init.php');
	$tbl = 'tbl_stories';
	$getStories = getAll($tbl);
?>
<!-- <!doctype html> -->
<!-- Doctype for partial html validation testing  -->
<section id="stories">
	<h2 class="hidden">Because a Donor Website - Organ Donation Recipient Stories</h2>
	<div class="row">
		<div class="col-xs-12 col-md-12 banner" id="bannerStories1">
			<div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
				<img src="img/icons/feather.svg" height="0" alt="Because a Donor" id="iconStories">
				<h3 class="bannerHeading">Discover Their Stories</h3>
				<p>Here we have gathered the stories of donors, donor families,
					and organ recipients from across Ontario. See for yourself the truly
				profound impact of organ donation on our communities. </p>
			</div>
		</div>
								<div class="col-xs-12 col-md-12 text-center bounceArrow">
					<?php include("arrow-down.html") ?>
				</div>
	</div>
	<div class="col-xs-12 col-md-12 col-md-10 col-md-offset-1 text-center" id="storiesContainer">
		<!-- 			<img src="img/icons/feather.svg" height="0" alt="Because a Donor" id="iconFeather">
		<h4>Discover their Stories</h4> -->
		<!-- Stories -->
		<?php
		if(!is_string($getStories)){
			while($row = mysqli_fetch_array($getStories)){
				if($row['story_status'] == "posted"){
					echo "<div class=\"col-xs-12 col-md-4 story\">
								<img src=\"img/stories/uploads/{$row['story_photo']}\" alt=\"{$row['story_name']}\" class=\"img-responsive\">
								<h2>{$row['story_name']}</h2>
								<p>{$row['story_city']}</p>
								<p>{$row['story_organ']}</p>
								<a href=\"#stories/{$row['story_id']}\" class=\"storyLink\">More...</a><br><br>
						</div>";
				}
			}
		}
		?>
	</div>
	<!-- End Stories -->
	
	<div class="col-xs-12 col-md-12 col-md-10 col-md-offset-1 text-center" id="btnLoadStories">
		<a href="#" class="btnBlue">load more stories</a>
	</div>
</div>
<div class="col-xs-12 col-md-12 col-md-10 col-md-offset-1 text-center">
	<div class="col-xs-12 col-md-12 col-md-12" id="storiesFooter">
		<h4><span class="red">Do you have a story about organ donation that you want to share?</span><br>Your experiences could be chosen and posted here to inspire others.</h4>
		<a href="index.php?partial=share" class="btnRed" id="btnStoriesFooter">share your story</a>
	</div>
</div>
</section>