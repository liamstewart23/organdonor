<?php require_once('phpscripts/init.php');
	if (empty($_GET['id'])){//prevent people from typing in admin_editstory with no id
		redirect_to('edit_index.php');
	}

	$id = $_GET['id'];

	$tbl = 'tbl_banners';
	$col = 'banner_id';
	$getBanner = getTable($tbl, $col, $id);
	$direct = 'index.php?partial=edit_'.$getBanner['banner_page'];

	if(isset($_POST['submit'])){
		$title = trim($_POST['title']);
		$desc = "";
		$icon = "";
		if($id == 3 || $id == 4 || $id == 5 || $id == 8 || $id == 9 || $id == 10 ){
			$desc = preg_replace("/\r\n|\r/", "<br>", $_POST["desc"]);
			$desc = trim($desc);
		}
		if($id == 1 || $id == 2 || $id == 5 || $id == 7 || $id == 8 || $id == 9 || $id == 10 ){
			$icon = trim($_FILES["image"]["name"]);
		}

		$result = editBanner($id,$title,$desc,$icon,$direct);
		$message = $result;
	}
?>
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
							<textarea type=\"text\" name=\"desc\">";
						echo str_replace('<br>', "\r\n", $getBanner['banner_desc']);
						echo "</textarea><br>";
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