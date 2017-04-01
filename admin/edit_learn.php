<?php
	admin_only();

	//STATS
	$tbl = 'tbl_statistics';
	$tblurl = 'statistics';
	$col = 'stat_id';
	$getStats = getAll($tbl);

	if(isset($_POST['submit'])){
		$text = trim($_POST['text']);
		$image = trim($_FILES['image']['name']);

		$result = addStat($text,$image);
		return $result;
	}

	//MYTH FACT
	if(isset($_POST['submit'])){
		$myth = trim($_POST['myth']);
		$fact = trim($_POST['fact']);
		$keyword = trim($_POST['keyword']);

		$addMythFact = addMythFact($myth,$fact,$keyword);
		$message = $addMythFact;
	}
	
	$tbl = 'tbl_myths_facts';
	$col = 'mf_id';
	$getMythFacts = getAll($tbl);
?>



<h1>Edit Learn Page</h1>
<?php //include('edit_stats.php') ?>
<?php //include('edit_mythfact.php') ?>

	<div>
		<div>
		<h2>Add a New Statistic</h2>
		<?php if(!empty($message)){echo $message;} ?>
		<form action="edit_addstat.php" method="post" enctype="multipart/form-data">
		<h2>Add a New Story</h2>

			<div class="upForm">
				<label>Name:</label><br>
				<input required type="text" name="text" value="<?php if(!empty($text)){echo $text;} ?>"><br>

				<label>Photo</label><br>
				<input required type="file" name="image" value="<?php if(!empty($image)){echo $image;} ?>"><br>
			</div>

			<div class="addbtn">
				<input type="submit" name="submit" value="Add Statistic">
			</div>
		</form>
		</div>

		<div>
		<h2>Edit Stories</h2>
			<?php 
				if(!is_string($getStats)){
					while($row = mysqli_fetch_array($getStats)){
						echo "<p>{$row['stat_text']}</p>
							<img src=\"../img/{$row['stat_img']}\">
							<a href=\"edit_editstat.php?id={$row['stat_id']}\">Edit</a><br><br>
							<a href=\"edit_delete.php?table={$tbl}&col={$col}&id={$row['stat_id']}\">Delete</a><br><br>";
					}
				}else{
					echo "<p>{$getStats}</p>";
				}
			?>
		</div>
	</div>

	<div>
	<h1>Myths Vs Facts</h1>
		<?php if(!empty($message)){echo $message;} ?>
		<form action="edit_mythfact.php" method="post">
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
	</div>