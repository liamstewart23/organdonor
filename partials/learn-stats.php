<?php
	$tbl = 'tbl_statistics';
	$getStats= getAll($tbl);
?>
<div class="row">
	<div class="col-xs-12 col-md-12 col-md-10 col-md-offset-1 text-center" id="statistics">
		<!-- <img src="img/icons/stats.svg" height="0" alt="Because a Donor" id="iconStats"> -->
		<h4 id="statsh4"><?php echo $getStatsB['banner_title']; ?></h4>
		<?php
			if(!is_string($getStats)){
				while($row = mysqli_fetch_array($getStats)){
					echo "<div class=\"col-md-6\">
							<img src=\"img/learn/stats/{$row['stat_img']}\" class=\"statsIcon img-responsive\" alt=\"{$row['stat_text']}\">
							<p>{$row['stat_text']}</p>
						</div>";
		
				}
			}
		?>
	</div>
</div>