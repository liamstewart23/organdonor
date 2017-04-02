<?php

	require_once('phpscripts/init.php');
	confirm_logged_in(); //comment out so you can test page without having to login
	admin_only();

	//BANNERS
	$tbl = 'tbl_banners';
	$col = 'banner_id';

	$id = '8';
	$getMessageB = getTable($tbl, $col, $id);

	$id = '9';
	$getShareB = getTable($tbl, $col, $id);



?>



	<section>
		<div>
		<h2>Share Banner</h2>
			<?php 
			echo "<div class=\"admin-banner\">
					<h3>{$getMessageB['banner_title']}</h3>
					<p>{$getMessageB['banner_desc']}</p>
					<p>{$getMessageB['banner_img']}</p>
					<a href=\"edit_editbanner.php?id={$getMessageB['banner_id']}\">Edit</a>
				</div>";
			?>
		</div>

		<div>
		<h2>Send Story Banner</h2>
			<?php 
			echo "<div class=\"admin-banner\">
					<h3>{$getShareB['banner_title']}</h3>
					<p>{$getShareB['banner_desc']}</p>
					<p>{$getShareB['banner_img']}</p>
					<a href=\"edit_editbanner.php?id={$getShareB['banner_id']}\">Edit</a>
				</div>";
			?>
		</div>
	</section>
		
