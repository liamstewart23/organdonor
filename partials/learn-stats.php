<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

	require_once('../admin/phpscripts/init.php');

	$tbl = 'tbl_statistics';
	$getStats= getAll($tbl);
?>

<!-- <!doctype html> -->
<!-- Doctype for partial html validation testing  -->
<section id="stats">
	<h2 class="hidden">Because a Donor Website - Organ Donation Statistics</h2>
	<div class="row">
		<div class="col-xs-12 col-md-12 col-md-6 col-md-offset-3 text-center" id="statistics">
			<!-- <img src="img/icons/stats.svg" height="0" alt="Because a Donor" id="iconStats"> -->
			<h4 id="statsh4">Organ Donation Statistics</h4>

			<?php
				if(!is_string($getStats)){
					while($row = mysqli_fetch_array($getStats)){
						echo "<div class=\"col-xs-12 col-md-12 col-md-6 text-center stat-item\" height=\"0\" >
								<div class=\"inner\">
									<img src=\"img/learn/stats/{$row['stat_img']}\" alt=\"{$row['stat_text']}\">
									<p>{$row['stat_text']}</p>
								</div>
							 </div>";
					}
				}

			?>
			<!--
			<div class="col-xs-12 col-md-12 col-md-6 text-center stat-item">
				<div class="inner">
					<img src="img/icons/1to8.svg" height="0" alt="1 Donor can save 8 lives" id="icon1To8">
					<p>One donor can save up to 8 lives through organ donation, and 75 more through tissue donation.</p>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-12 col-md-6 text-center stat-item">
				<div class="inner">
					<img src="img/icons/3days.svg" height="0" alt="over 1500 people need an organ in ontario" id="icon3Days">
					<p>Over 1’500 Ontarians, of all ages, are waiting for a donor. Every three days, we lose one of them.</p>
				</div>
			</div>
			<div class="col-xs-12 col-md-12 col-md-6 text-center stat-item">
				<div class="inner">
					<img src="img/icons/pies.svg" height="0" alt="85% aree with organ donation, only 31% are registered in Ontario" id="iconPies">
					<p>85% of Ontarians agree with organ donation, but only 31% are registered donors</p>
				</div>
			</div>
			<div class="col-xs-12 col-md-12 col-md-6 text-center stat-item">
				<div class="inner">
					<img src="img/icons/2min.svg" height="0" alt="Register in 2 minutes" id="icon2Min">
					<p>It only takes two minutes to register to be an organ donor. It could mean a lifetime for someone else.</p>
				</div>
			</div>-->
		</div>
	</div>
</section>