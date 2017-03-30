<?php
	require_once('phpscripts/init.php');
	confirm_logged_in(); //comment out so you can test page without having to login

	if (empty($_GET['id'])){//prevent people from typing in admin_editstory with no id
		redirect_to('edit_stats.php');
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

<?php include("includes/header.php") ?>

	<h1>Under Construction</h1>
	<p>This page is currently under construction.</p>
		
<?php include("includes/footer.php") ?>