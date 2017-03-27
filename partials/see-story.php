<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

	require_once('../admin/phpscripts/init.php');

	$id = $_GET['id'];

	$tbl = 'tbl_stories';
	$col = 'story_id';
	$getStory = getTable($tbl, $col, $id);
?>

<!-- <!doctype html> --> 
<!-- Doctype for partial html validation testing  -->
		<?php
			echo "<div class=\"col-xs-12 storyPage\">
				<img src=\"img/stories/uploads/{$getStory['story_photo']}\" alt=\"{$getStory['story_name']}\">
				<h2>{$getStory['story_name']}, <span>{$getStory['story_city']}</span></h2>
				<h3>{$getStory['story_organ']}</h3>";
			if($getStory['story_type'] == 'written'){
				echo "<p>{$getStory['story_written']}</p>";
			}else if($getStory['story_type'] == 'video'){
				echo "{$getStory['story_link']}";
			}
		?>