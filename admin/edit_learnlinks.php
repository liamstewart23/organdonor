<?php require_once('phpscripts/init.php');
	if(isset($_POST['submit'])){
		$text = trim($_POST['text']);
		$image = trim($_FILES['image']['name']);

		$result = addStat($text,$image);
		return $result;
	}
?>

	<h1>Stories</h1>
		<?php if(!empty($message)){echo $message;} ?>
		<form action="index.php?partial=edit_addstat" method="post" enctype="multipart/form-data">
		<h2>Add a New Story</h2>

			<div class="upForm">
				<label>Title:</label><br>
				<input required type="text" name="title" value="<?php if(!empty($title)){echo $title;} ?>"><br>

				<label>Link:</label><br>
				<input required type="text" name="link" value="<?php if(!empty($link)){echo $link;} ?>"><br>

				<label>Image:</label><br>
				<input required type="file" name="link" value="<?php if(!empty($image)){echo $image;} ?>"><br>
			</div>

			<div class="addbtn">
				<input type="submit" name="submit" value="Add Statistic">
			</div>

		</form>