<?php

	$error =  "There was an error accessing this information. Please contact your admin.";

	function getAll($tbl) {
		include('config.php');
		$queryAll = "SELECT * FROM {$tbl}";
		$runAll = mysqli_query($link, $queryAll);

		if($runAll){
			return $runAll;	
		}else{
			return $error;
		}
	mysqli_close($link);
	}

	function addStory($name,$age,$city,$organ,$story,$video){
		$type = 'written';
		require_once('config.php');
		$query = "INSERT INTO tbl_stories VALUES(NULL,'{$name}','{$age}','{$organ}','{$city}','{$type}','{$story}','{$video}')";
		$run = mysqli_query($link, $query);

		if($run){
			redirect_to('admin_index.php');
		}else{
			return $error;
		}
	mysqli_close($link);
	}
?>