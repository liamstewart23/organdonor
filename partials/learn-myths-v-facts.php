<?php
	$tbl = 'tbl_myths_facts';
	$getFacts = getAll($tbl);

?>
<div class="row">
	<!-- Search -->
	<div class="col-xs-12 col-md-12 col-md-12 text-center" id="myths">
		<img src="img/icons/<?php echo $getMythsB['banner_img']; ?>" height="0" alt="Because a Donor" id="iconMyth">
		<h3 class="bannerHeading"><?php echo $getMythsB['banner_title']; ?></h3>
		<div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
			
			<div id="myth-vs-fact-search">
				<div class="input-group col-md-12">
					<!--<form action="#/learn" method="post">-->
						<input id="searchtext" type="text" value="nothing" ng-model="searchfilter" name="filter" class="form-control input-lg" placeholder="eg. 'funeral', 'age', etc.">
						<span class="input-group-btn">
							<button id="searchbtn" class="btn btn-info btn-lg" ng-click="setSearchFilter" type="submit" name="submit">
							<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</span>
					<!--</form>-->
				</div>
			</div>
		</div>
	</div>
	
	<!-- End Search -->
	<!-- Myths v Facts - Use even / odd for styling colours -->
	<div ng-repeat="mf in mythfact | filter: searchfilter">
		<div class="col-xs-12 col-md-12" ng-class-odd="'myth-fact-bg'" ng-class-even="'myth-fact-bg-offset'">
			<div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1 myth-fact">
				<h3 class="red"><i class="fa fa-times" aria-hidden="true"></i> {{mf.mf_myth}}</h3>
				<p><i class="fa fa-check green" aria-hidden="true"></i> {{mf.mf_fact}}</p>
				<p class="hide">{{mf.mf_keywords}}</p>
			</div>
		</div>
	</div>
	<?php
		/*$offset = 0;
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
		}*/
	?>
	<!-- End Myths v Facts -->

	<script> 

		
	</script>

</div>