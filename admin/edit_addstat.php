<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();

	if(isset($_POST['submit'])){
		$text = trim($_POST['text']);
		$image = trim($_FILES['image']['name']);

		$result = addStat($text,$image);
		return $result;
	}
?>

<?php include("includes/header.php") ?>

	<h1>Stories</h1>
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

<?php include("includes/footer.php")?>