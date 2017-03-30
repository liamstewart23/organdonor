<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();

	$tbl = 'tbl_stories';
	$tblurl = 'stories';
	$col = 'story_id';
	$getStories = getAll($tbl);

?>

<?php include("includes/header.php") ?>

	<h1>Stories</h1>
		<h2>Add a New Story</h2>
		<a href="edit_addstory.php?type=written">Written</a>
		<a href="edit_addstory.php?type=video">Video</a>

		<div>
		<h2>Edit Stories</h2>
			<?php 
				if(!is_string($getStories)){
					while($row = mysqli_fetch_array($getStories)){
						echo "<h3>{$row['story_name']}, {$row['story_age']}</h3>
							<p>{$row['story_city']}</p>
							<p>{$row['story_organ']}</p>
							<a href=\"edit_editstory.php?id={$row['story_id']}\">Edit Story</a><br><br>
							<a href=\"edit_delete.php?table={$tbl}&col={$col}&id={$row['story_id']}\">Delete Story</a><br><br>";
					}
				}else{
					echo "<p>{$getStories}</p>";
				}
			?>
		</div>

<?php include("includes/footer.php") ?>