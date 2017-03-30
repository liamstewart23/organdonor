<?php
	$tbl = 'tbl_statistics';
	$getStats= getAll($tbl);
?>
	<div class="row">
		<div class="col-xs-12 col-md-12 col-md-12 text-center" id="statistics">
			<!-- <img src="img/icons/stats.svg" height="0" alt="Because a Donor" id="iconStats"> -->
			<h4 id="statsh4">Organ Donation Statistics</h4>
			<?php
			$displayOrder = 0;
				if(!is_string($getStats)){
					while($row = mysqli_fetch_array($getStats)){
						if ($displayOrder==1) {
							echo "<div class=\"col-xs-12 col-md-12 text-center\">";
							 echo "<div class=\"col-xs-12 hidden-xs col-md-5\">									<img src=\"img/learn/stats/{$row['stat_img']}\" class=\"statsIcon\" alt=\"{$row['stat_text']}\"></div>";

							echo "<div class=\"col-xs-12 col-md-7 stat-item\">
									<p>{$row['stat_text']}</p>
							 </div></div>";

							 $displayOrder = 0;
						}
						else {
							echo "<div class=\"col-xs-12 col-md-12 text-center\">";
							echo "<div class=\"col-xs-12 col-md-7 stat-item\">
									<p>{$row['stat_text']}</p>
							 </div>";
							 echo "<div class=\"col-xs-12 hidden-xs col-md-5\">									<img src=\"img/learn/stats/{$row['stat_img']}\" class=\"statsIcon\" alt=\"{$row['stat_text']}\"></div></div>";
							 $displayOrder = 1;
						}
					}
						}




			?>
		</div>
	</div>