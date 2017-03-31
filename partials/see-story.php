<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

	require_once('../admin/phpscripts/init.php');

	echo $_GET["story_id"];
	if(isset($_GET["story_id"])) {
		$id = $_GET["story_id"];
		$tbl = "tbl_stories";
		$col = "story_id";
	$getStory = getTable($tbl, $col, $id);
}
	else {
		//echo "Next time pick a story please.";
	}
?>

<!-- <!doctype html> --> 
<!-- Doctype for partial html validation testing  -->


<section id="story">
	<h2 class="hidden">Because a Donor Website - User Submitted Story</h2>
		<?php
			echo "<div class=\"col-xs-12 col-md-12 storyPage\">
				<div class=\"col-xs-12 col-md-4\">
				<img src=\"img/stories/uploads/{$getStory['story_photo']}\" alt=\"{$getStory['story_name']}\" class=\"img-responsive\">
				</div>
				<div class=\"col-xs-12 col-md-8\">
				<h3>{$getStory['story_name']}</h3>
				<h4>{$getStory['story_organ']}</h4>
				</div>";
				echo "<div class=\"row\"><div class=\"col-xs-12 col-md-12 story-content text-center\">";
			if($getStory['story_type'] == 'written'){
				echo "<p>{$getStory['story_text']}</p>";
			}else if($getStory['story_type'] == 'video'){
				//{$getStory['story_link']}
				echo "<div class=\"videoWrapper\">
				    <iframe src=\"https://player.vimeo.com/video/121366735\" width=\"640\" height=\"360\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>";
			}
			echo "</div></div>";
		?>
</section>