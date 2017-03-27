<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

	require_once('../admin/phpscripts/init.php');

	$tbl = 'tbl_myths_facts';
	$getFacts = getAll($tbl);
?>

<!-- <!doctype html> -->
<!-- Doctype for partial html validation testing  -->
<section id="mvf">
	<h2 class="hidden">Because a Donor Website - Myths vs. Facts</h2>
	<div class="row">
		<!-- Search -->
		<div class="col-xs-12 col-md-12 col-md-12 text-center" id="myths">
			<img src="img/icons/myth.svg" height="0" alt="Because a Donor" id="iconMyth">
			<h3 class="bannerHeading">Myth vs. Fact</h3>
			<div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
				
				<div id="myth-vs-fact-search">
					<div class="input-group col-md-12">
						<input type="text" class="form-control input-lg" placeholder="eg. 'funeral', 'age', etc." />
						<span class="input-group-btn">
							<button class="btn btn-info btn-lg" type="button">
							<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- End Search -->
		<div id="mythTo"></div> <!-- Trying to force scrollTo below search area -->
		<!-- Myths v Facts -->
		<?php
			if(!is_string($getFacts)){
				while($row = mysqli_fetch_array($getFacts)){
					echo "<div class=\"col-xs-12 myth-fact\">
							<h3>{$row['mf_myth']}</h3>
							<p>{$row['mf_fact']}</p>
						 </div>";
				}
			}
		?>

		<!-- End Myths v Facts -->
		<!-- Learn Footer -->
		<div class="col-xs-12 col-md-12 col-md-10 col-md-offset-1 text-center">
			<div class="col-xs-12 col-md-12 col-md-12" id="storiesFooter">
				<h4><span class="red">Want to find out more about organ donation and registration?</span><br>Check out these valuable resources:</h4>
				<div class="col-xs-12 col-md-12 col-md-4">
					<img src="" alt="">
				</div>
			</div>
		</div>
		<!-- End Learn Footer -->
	</div>
</section>