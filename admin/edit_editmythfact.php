<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();

	if (empty($_GET['id'])){//prevent people from typing in admin_editstory with no id
		redirect_to('edit_stories.php');
	}

	$id = $_GET['id'];
	$tbl = 'tbl_myths_facts';
	$col = 'mf_id';
	$getMythFact = getTable($tbl, $col, $id);

	if(isset($_POST['submit'])){
		
		$myth = trim($_POST['myth']);
		$fact = trim($_POST['fact']);
		$keyword = trim($_POST['keyword']);

		$editMythFact = editMythFact($id,$myth,$fact,$keyword);
		$message = $editMythFact;
	}


?>
<?php include("includes/header.php") ?>
	<h1>Stories</h1>
		<?php if(!empty($message)){echo $message;} ?>
		<?php echo "<form action=\"edit_editmythfact.php?id={$id}\" method=\"post\">"?>
		<h2>Edit Myth vs Fact</h2>

			<div class="upForm">
				<label>Myth:</label><br>
				<input type="text" name="myth" value="<?php echo $getMythFact['mf_myth'] ?>"><br>

				<label>Fact:</label><br>
				<input type="text" name="fact" value="<?php echo $getMythFact['mf_fact'] ?>"><br>

				<label>Keywords:</label><br>
				<input type="text" name="keyword" value="<?php echo $getMythFact['mf_keywords'] ?>"><br>
			</div>

			<div class="addbtn">
				<input type="submit" name="submit" value="Save Edits">
			</div>

			<div>

		</form>

<?php include("includes/footer.php") ?>