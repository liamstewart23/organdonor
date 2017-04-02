<!-- <!doctype html> -->
<!-- Doctype for partial html validation testing  -->
<?php
	ini_set('display_errors',1);
error_reporting(E_ALL);
	include('../admin/phpscripts/init.php');
	
	//BANNERS
	$tbl = 'tbl_banners';
	$col = 'banner_id';

	$id = '5';
	$getLearnB = getTable($tbl, $col, $id);

	$id = '6';
	$getStatsB = getTable($tbl, $col, $id);

	$id = '7';
	$getMythsB = getTable($tbl, $col, $id);
?>
<section id="learn">
	<h2 class="hidden">Because a Donor Website - Learn about organ donation</h2>
	<div class="row">
		<div class="col-xs-12 col-md-12 banner" id="bannerLearn1">
			<div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
				<img src="img/icons/<?php echo $getLearnB['banner_img']; ?>" height="0" alt="Because a Donor" id="iconLearn">
				<h3 class="bannerHeading"><?php echo $getLearnB['banner_title']; ?></h3>
				<p><?php echo $getLearnB['banner_desc']; ?></p>
				<!-- 				<div class="col-xs-12 col-sm-offset-0 col-md-6" id="mobileLearnBannerFix">
					<a href="index.php?partial=learn-stats" class="btnB1" id="btnLearnStats">statistics</a>
				</div>
				<div class="col-xs-12 col-sm-offset-0 col-md-6">
					<a href="index.php?partial=learn-myths-v-facts" class="btnB2" id="btnLearnMyths">myth vs. fact</a>
				</div> -->
			</div>
		</div>
						<div class="col-xs-12 col-md-12 text-center bounceArrow">
					<?php include("arrow-down.html") ?>
				</div>
		<?php include("../partials/learn-stats.php") ?>
		<?php include("../partials/learn-myths-v-facts.php") ?>
		<!-- Learn Footer -->
		<div class="col-xs-12 col-md-12 col-md-10 col-md-offset-1 text-center">
			<div class="col-xs-12 col-md-12 col-md-12" id="storiesFooter">
				<h4><span class="red">Want to find out more about organ donation and registration?</span><br>Check out these valuable resources:</h4>
				<div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
					<div class="col-xs-12 col-md-4">
						<a href="https://beadonor.ca/" target="_blank"><img src="img/learn/beadonor.jpg" alt="be a donor" class="img-responsive"></a>
					</div>
					<div class="col-xs-12 col-md-4">
						<a href="https://www.giftoflife.on.ca/" target="_blank"><img src="img/learn/trillium.jpg" alt="trillium gift of life network" class="img-responsive"></a>
					</div>
					<div class="col-xs-12 col-md-4">
						<a href="https://www.services.gov.on.ca/sf/" target="_blank"><img src="img/learn/serviceontario.jpg" alt="service ontario" class="img-responsive"></a>
					</div>
				</div>
			</div>
		</div>
		<!-- End Learn Footer -->
	</section>