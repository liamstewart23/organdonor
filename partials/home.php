<?php
	include('../admin/phpscripts/init.php');
    //BANNERS
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
<!-- <!doctype html> -->
<!-- Doctype for partial html validation testing  -->
<section id="home">
	<h2 class="hidden">Because a Donor Website</h2>
	<div class="row">
		<div class="col-xs-12 col-md-12"></div>
		<div class="col-xs-12 col-md-6 text-center" id="bannerHome1">
			<img src="img/icons/<?php echo $getRegisterB['banner_img']; ?>" height="0" alt="Because a Donor" id="iconCheckmark">
			<h3 class="bannerHeading"><?php echo $getRegisterB['banner_title']; ?></h3>
			<a href="https://www.ontario.ca/page/organ-and-tissue-donor-registration" target="_blank" class="btnB1Home" id="btnRegister">Register now</a>
		</div>
		<div class="col-xs-12 col-sm-offset-0 col-md-6" id="bannerHome2">
			<div class="text-center">
				<img src="img/icons/<?php echo $getLearnB['banner_img']; ?>" height="0" alt="Because a Donor" id="iconBook">
				<h3 class="bannerHeading"><?php echo $getLearnB['banner_title']; ?></h3>
				<a href="index.php?partial=learn" class="btnB2Home" id="btnHomeLearn">learn more</a>
			</div>
		</div>
		<div class="col-xs-12 col-md-12 text-center" id="homeArrow">
			<?php include("arrow-down.html") ?>
		</div>
	</div>
	<div class="col-xs-12 col-md-12 text-center" id="content1">
		<img src="img/icons/community.svg" height="0" alt="Because a Donor" id="iconHeart">
		<h4>Many Canadians are alive today <br><span class="red">Because of an Organ Donor</span></h4>
		<div class="col-xs-12 col-md-8 col-md-offset-2">
			<p>We have created a network that has allowed recipients, donors, and their families all<br>across Ontario to share their stories.</p>
			<div class="col-xs-12 col-md-12">
				<p>Tell us yours.</p>
				<h5>#because<span class="red">a</span>donor</h5>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 text-center homeBannerText" id="bannerHome3">
		<h3><?php echo $getStoriesB['banner_title']; ?></h3>
		<p><?php echo $getStoriesB['banner_desc']; ?></p>
		<div class="subBannerBtn">
			<a href="index.php?partial=stories" class="btnB4" id="btnHomeStories">discover stories</a>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 text-center homeBannerText" id="bannerHome4">
		<h3><?php echo $getShareB['banner_title']; ?></h3>
		<p><?php echo $getShareB['banner_desc']; ?></p>
		<div class="subBannerBtn">
			<a href="index.php?partial=share" class="btnB4" id="btnHomeShare">raise awareness</a>
		</div>
	</div>
</div>
</section>