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
	if($getStory['story_photo'] == NULL){
		echo "<div class=\"col-xs-12 col-md-12 storyPage\">
			<div class=\"col-xs-12 col-md-offset-10 col-md-1\"><a href=\"#stories\"><i class=\"red fa fa-times fa-2x\" aria-hidden=\"true\"></i></a></div>
				<div class=\"col-xs-12 col-md-11 col-md-offset-1\">
					<h3>{$getStory['story_name']}</h3>
					
					<h4 class=\"red\">{$getStory['story_organ']}</h4>
					";
					//echo "<div class=\"row\"><div class=\"col-xs-12 col-md-12 story-content text-center\">";
					}
					else {
								echo "<div class=\"col-xs-12 col-md-12 storyPage\">
						<div class=\"col-xs-12 col-md-offset-10 col-md-1\"><a href=\"#stories\"><i class=\"red fa fa-times fa-2x\" aria-hidden=\"true\"></i></a></div>
							<div class=\"col-xs-12 col-md-4 col-md-offset-1\">
								<img src=\"img/stories/uploads/{$getStory['story_photo']}\" alt=\"{$getStory['story_name']}\" class=\"img-responsive\">
							</div>
							<div class=\"col-xs-12 col-md-6\">
								<h3>{$getStory['story_name']}</h3>

								<h4 class=\"red\">{$getStory['story_organ']}</h4>
								";
									//echo "<div class=\"row\"><div class=\"col-xs-12 col-md-12 story-content text-center\">";
								}
								if($getStory['story_type'] == 'written'){
									echo "</div><div class=\"row\"><div class=\"col-xs-12 col-md-10 col-md-offset-1 story-content\"><p>{$getStory['story_text']}</p>";
								}else if($getStory['story_type'] == 'video'){
								echo "</div><div class=\"row\"><div class=\"col-xs-12 col-md-10 col-md-offset-1 story-content text-center\">
								<div class=\"videoWrapper\">
											{$getStory['story_link']}
								</div>";
							}
						echo "</div></div></div>";
					?>
				</section>