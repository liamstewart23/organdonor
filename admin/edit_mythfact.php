<?php
	editor_only();

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

	<h1>Myths Vs Facts</h1>
		<?php if(!empty($message)){echo $message;} ?>
		<form action="index.php?partial=edit_mythfact" method="post">
		<h2>Add a New Myth vs Fact</h2>

			<div class="upForm">
				<label>Myth:</label><br>
				<input type="text" name="myth" value="<?php if(!empty($myth)){echo $myth;} ?>"><br>

				<label>Fact:</label><br>
				<input type="text" name="fact" value="<?php if(!empty($fact)){echo $fact;} ?>"><br>

				<label>Keywords:</label><br>
				<input type="text" name="keyword" value="<?php if(!empty($keyword)){echo $keyword;} ?>"><br>
			</div>

			<div class="addbtn">
				<input type="submit" name="submit" value="Add Myth vs Fact">
			</div>

			<div>
			<h2>Myths vs Facts</h2>
				<?php 
					if(!is_string($getMythFacts)){
						while($row = mysqli_fetch_array($getMythFacts)){
							echo "<p>{$row['mf_myth']}</p>
								<p>{$row['mf_fact']}</p>
								<p>{$row['mf_keywords']}</p>
								<a href=\"index.php?partial=edit_editmythfact&id={$row['mf_id']}\">Edit</a><br><br>
								<a href=\"index.php?partial=edit_delete&table={$tbl}&col={$col}&id={$row['mf_id']}\">Delete</a><br><br>";
						}
					}else{
						echo "<p>{$getMythFacts}</p>";
					}
				?>
			</div>
		</form>