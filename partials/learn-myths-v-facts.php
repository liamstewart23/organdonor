<?php
	$tbl = 'tbl_myths_facts';
	$getFacts = getAll($tbl);

	if(isset($POST)){
		$tbl = 'tbl_myths_facts';
		$col1 = 'mf_myth';
		$col2 = 'mf_fact';
		$col3 = 'mf_keywords';

		$searchResult = learnSearch($tbl, $col1, $col2, $col3);

	}

?>
<div class="row">
	<!-- Search -->
	<div class="col-xs-12 col-md-12 col-md-12 text-center" id="myths">
		<img src="img/icons/myth.svg" height="0" alt="Because a Donor" id="iconMyth">
		<h3 class="bannerHeading">Myth vs. Fact</h3>
		<div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
			
			<div id="myth-vs-fact-search">
				<div class="input-group col-md-12">
					<!--<form action="#/learn" method="post">-->
						<input type="text" name="filter" class="form-control input-lg" placeholder="eg. 'funeral', 'age', etc." />
						<span class="input-group-btn">
							<button id="searchbtn" class="btn btn-info btn-lg" type="submit" name="submit">
							<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</span>
					<!--</form>-->
				</div>
			</div>
		</div>
	</div>
	<!-- End Search -->
	<!-- Myths v Facts -->
	<?php
		$offset = 0;
		if(!is_string($getFacts)){
			while($row = mysqli_fetch_array($getFacts)){
				if ($offset == 1) {
				echo "<div class=\"col-xs-12 col-md-12 myth-fact-bg-offset\"><div class=\"col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1 myth-fact\">
							<h3 class=\"red\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i> {$row['mf_myth']}</h3>
							<p><i class=\"fa fa-check green\" aria-hidden=\"true\"></i> {$row['mf_fact']}</p>
					</div></div>";
					$offset = 0;
					}
					else {
				echo "<div class=\"col-xs-12 col-md-12 myth-fact-bg\"><div class=\"col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1 myth-fact myth-fact-bg\">
							<h3 class=\"red\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i> {$row['mf_myth']}</h3>
							<p><i class=\"fa fa-check green\" aria-hidden=\"true\"></i> {$row['mf_fact']}</p>
					</div></div>";
					$offset = 1;			
					}
			}
		}
	?>
	<!-- End Myths v Facts -->
</div>