<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();

	$tbl = 'tbl_statistics';
	$tblurl = 'statistics';
	$col = 'stat_id';
	$getStats = getAll($tbl);

	if(isset($_POST['submit'])){
		$text = trim($_POST['text']);
		$image = trim($_FILES['image']['name']);

		$result = addStat($text,$image);
		return $result;
	}
?>

<?php include('includes/header.php') ?>
	<h1>Statictics</h1>

		<h2>Add a New Statistic</h2>
		<?php if(!empty($message)){echo $message;} ?>
		<form action="edit_addstat.php" method="post" enctype="multipart/form-data">
		<h2>Add a New Story</h2>

			<div class="upForm">
				<label>Name:</label><br>
				<input required type="text" name="text" value="<?php if(!empty($text)){echo $text;} ?>"><br>

				<label>Photo</label><br>
				<input required type="file" name="image" value="<?php if(!empty($image)){echo $image;} ?>"><br>
			</div>

			<div class="addbtn">
				<input type="submit" name="submit" value="Add Statistic">
			</div>
		</form>

		<div>
		<h2>Edit Stories</h2>
			<?php 
				if(!is_string($getStats)){
					while($row = mysqli_fetch_array($getStats)){
						echo "<p>{$row['stat_text']}</p>
							<img src=\"../img/{$row['stat_img']}\">
							<a href=\"edit_editstat.php?id={$row['stat_id']}\">Edit</a><br><br>
							<a href=\"edit_delete.php?table={$tbl}&col={$col}&id={$row['stat_id']}\">Delete</a><br><br>";
					}
				}else{
					echo "<p>{$getStats}</p>";
				}
			?>
		</div>
