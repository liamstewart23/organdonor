<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();

		$tbl = $_GET['table'];
		//$tbl = "tbl_".$_GET['table'];
		$id = $_GET['id'];
		$col = $_GET['col'];
		

	if (isset($_POST['yes'])){
		deletePost($tbl,$col,$id);
		redirect_to('admin_index.php');
		//previous_page();

	}
	if (isset($_POST['no'])){
		//echo "that's okay";
		redirect_to('admin_index.php');
		//previous_page();
	}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome Company Name</title>
<link rel="stylesheet" href="css/main.css"/>
</head>

	<body>
	<h1>Delete this post?</h1>
		<div>
			<p>Are you sure you want to delete this post?</p>

			<?php echo "<form action=\"edit_delete.php?table={$tbl}&col={$col}&id={$id}\" method=\"post\">"; ?> 
				<input type="submit" name="yes" value="Yes, Delete this Post">
				<input type="submit" name="no" value="No, Go Back">
			</form>
		</div>

		
	</body>
</html>