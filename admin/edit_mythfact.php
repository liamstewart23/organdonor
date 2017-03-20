<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();


	if(isset($_POST['submit'])){
		
		$myth = trim($_POST['myth']);
		$fact = trim($_POST['fact']);
		$keyword = trim($_POST['keyword']);

		$addMythFact = addMythFact($myth,$fact,$keyword);
		$message = $addMythFact;
	}

	$tbl = 'tbl_myths_facts';
	//$tblurl = 'stories';
	$col = 'mf_id';
	$getMythFacts = getAll($tbl);

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome Company Name</title>
<link rel="stylesheet" href="css/main.css"/>
</head>

	<body>
	<h1>Stories</h1>
		<?php if(!empty($message)){echo $message;} ?>
		<form action="edit_mythfact.php" method="post">
		<h2>Add a New Myth vs Fact</h2>

			<div class="upForm">
				<label>Myth:</label><br>
				<input type="text" name="myth"><br>

				<label>Fact:</label><br>
				<input type="text" name="fact"><br>

				<label>Keywords:</label><br>
				<input type="text" name="keyword"><br>
			</div>

			<div class="addbtn">
				<input type="submit" name="submit" value="Add Myth vs Fact">
			</div>

			<div>
			<h2>Edit Stories</h2>
				<?php 
					if(!is_string($getMythFacts)){
						while($row = mysqli_fetch_array($getMythFacts)){
							echo "<p>{$row['mf_myth']}</p>
								<p>{$row['mf_fact']}</p>
								<p>{$row['mf_keywords']}</p>
								<a href=\"edit_myths.php?id={$row['mf_id']}\">Edit</a><br><br>
								<a href=\"edit_delete.php?table={$tbl}&col={$col}&id={$row['mf_id']}\">Delete</a><br><br>";
						}
					}else{
						echo "<p>{$getMythFacts}</p>";
					}
				?>
			</div>

		</form>

	</body>
</html>