<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();

	$tbl = 'tbl_statistics';
	$tblurl = 'statistics';
	$col = 'stat_id';
	$getStories = getAll($tbl);

?>
<?php include("includes/header.php")?>
	<h1>Statictics</h1>

		<h2>Add a New Statistic</h2>
		<a href="edit_addstat.php">Add New</a>

		<div>
		<h2>Edit Stories</h2>
			<?php 
				if(!is_string($getStories)){
					while($row = mysqli_fetch_array($getStories)){
						echo "<p>{$row['stat_text']}</p>
							<img src=\"../img/{$row['stat_img']}\">
							<a href=\"edit_editstat.php?id={$row['stat_id']}\">Edit</a><br><br>
							<a href=\"edit_delete.php?table={$tbl}&col={$col}&id={$row['stat_id']}\">Delete</a><br><br>";
					}
				}else{
					echo "<p>{$getStories}</p>";
				}
			?>
		</div>
<?php include("includes/footer.php")?>