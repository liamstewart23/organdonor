<?php

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

	<h1>Under Construction</h1>
	<p>This page is currently under construction.</p>