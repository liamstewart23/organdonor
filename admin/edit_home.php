<?php
	admin_only();

	$tbl = 'tbl_banners';
	$col = 'banner_id';

	$id = '1';
	$getRegisterB = getTable($tbl, $col, $id);

	$id = '2';
	$getLearnB = getTable($tbl, $col, $id);

	$id = '3';
	$getStoriesB = getTable($tbl, $col, $id);

	$id = '4';
	$getShareB = getTable($tbl, $col, $id);

?>


<?php include('includes/header.php') ?>

	<section>
	<h1>Home Page</h1>

		<div>
		<h2>Edit Banners</h2>
			<?php 
			echo "<div class=\"admin-banner\">
					<h3>{$getRegisterB['banner_title']}</h3>
					<p>{$getRegisterB['banner_desc']}</p>
					<p>{$getRegisterB['banner_img']}</p>
					<a href=\"edit_editbanner.php?id={$getRegisterB['banner_id']}\">Edit</a>
				</div>";
			?>
			<?php 
			echo "<div class=\"admin-banner\">
					<h3>{$getLearnB['banner_title']}</h3>
					<p>{$getLearnB['banner_desc']}</p>
					<p>{$getLearnB['banner_img']}</p>
					<a href=\"edit_editbanner.php?id={$getLearnB['banner_id']}\">Edit</a>
				</div>";
			?>
			<?php 
			echo "<div class=\"admin-banner\">
					<h3>{$getStoriesB['banner_title']}</h3>
					<p>{$getStoriesB['banner_desc']}</p>
					<a href=\"edit_editbanner.php?id={$getStoriesB['banner_id']}\">Edit</a>
				</div>";
			?>
			<?php 
			echo "<div class=\"admin-banner\">
					<h3>{$getShareB['banner_title']}</h3>
					<p>{$getShareB['banner_desc']}</p>
					<a href=\"edit_editbanner.php?id={$getShareB['banner_id']}\">Edit</a>
				</div>";
			?>
		</div>
		
	</section>
		
<?php include("includes/footer.php") ?>

