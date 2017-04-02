<?php
require_once('phpscripts/init.php');
	if (empty($_GET['id'])){//prevent people from typing in admin_editstory with no id
		redirect_to('index.php?partial=edit_stats');
	}

	$id = $_GET['id'];

	$tbl = 'tbl_statistics';
	$col = 'stat_id';
	$getStats = getTable($tbl, $col, $id);

	if(isset($_POST['submit'])){
		$text = trim($_POST['text']);
		$image = trim($_FILES['image']['name']);

		$result = editStat($id,$text,$image);
		return $result;
	}
?>

	<h1>Stories</h1>
		<?php if(!empty($message)){echo $message;} ?>
		<?php echo "<form action=\"index.php?partial=edit_editstat&id={$id}\" method=\"post\" enctype=\"multipart/form-data\">"?>
		<h2>Edit Stat</h2>

			<div class="upForm">
				<label>Name:</label><br>
				<input required type="text" name="text" value="<?php echo $getStats['stat_text'] ?>"><br>

				<label>Image</label><br>
				<p><?php echo $getStats['stat_img']; ?></p>
				<input type="file" name="image" value="<?php echo $getStats['stat_img'] ?>"><br>
			</div>

			<div class="addbtn">
				<input type="submit" name="submit" value="Add Statistic">
			</div>

		</form>