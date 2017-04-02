<?php

	if (empty($_GET['id'])){//prevent people from typing in admin_editstory with no id

		redirect_to('index.php?partial=edit_stats');

	}

	$id = $_GET['id'];

	$tbl = 'tbl_banners';
	$col = 'banner_id';
	$getBanner = getTable($tbl, $col, $id);
	$direct = 'edit_'.$getBanner['banner_page'].'.php';

	if(isset($_POST['submit'])){
		$title = trim($_POST['title']);
		$desc = "";
		$icon = "";
		if($id == 3 || $id == 4 || $id == 5 || $id == 8 || $id == 9 || $id == 10 ){
			$desc = trim($_POST["desc"]);
		}
		if($id == 1 || $id == 2 || $id == 5 || $id == 7 || $id == 8 || $id == 9 || $id == 10 ){
			$icon = trim($_FILES["image"]["name"]);
		}

		$result = editBanner($id,$title,$desc,$icon,$direct);
		$message = $result;
	}
?>


<?php include("includes/header.php") ?>

	<section>
	<h1>Edit Banner</h1>
		<?php if(!empty($message)){echo $message;} ?>
		<?php echo "<form action=\"edit_editbanner.php?id={$id}\" method=\"post\">"?>
		

			<div class="upForm">
				<label>Title:</label><br>
				<input type="text" name="title" value="<?php echo $getBanner['banner_title'] ?>"><br>

				<?php 
					if($id == 3 || $id == 4 || $id == 5 || $id == 8 || $id == 9 || $id == 10 ){
						echo "<label>Description:</label><br>
							<input type=\"text\" name=\"desc\" value=\"{$getBanner['banner_desc']}\"><br>";
					}

					if($id == 1 || $id == 2 || $id == 5 || $id == 7 || $id == 8 || $id == 9 || $id == 10 ){
						echo "<label>Icon:</label><br>
							<p>{$getBanner['banner_img']}</p>
							<input type=\"file\" name=\"image\" value=\"{$getBanner['banner_img']}\">";
					}
				?>
			</div>

			<div class="addbtn">
				<input type="submit" name="submit" value="Save Edits">
			</div>

		</form>
	</section>
<?php include("includes/footer.php") ?>

