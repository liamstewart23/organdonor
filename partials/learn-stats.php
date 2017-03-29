<?php
	$tbl = 'tbl_statistics';
	$getStats= getAll($tbl);
?>
	<div class="row">
		<div class="col-xs-12 col-md-12 col-md-12 text-center" id="statistics">
			<!-- <img src="img/icons/stats.svg" height="0" alt="Because a Donor" id="iconStats"> -->
			<h4 id="statsh4">Organ Donation Statistics</h4>
			<?php
				if(!is_string($getStats)){
					while($row = mysqli_fetch_array($getStats)){
							echo "<div class=\"col-xs-12 col-md-7 text-center stat-item\">
									<p>{$row['stat_text']}</p>
							 </div>";
							 echo "<div class=\"col-xs-12 col-md-5 text-center\">									<img src=\"img/learn/stats/{$row['stat_img']}\" class=\"statsIcon\" alt=\"{$row['stat_text']}\"></div>";




					}
						}




			?>
		</div>
	</div>