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

	function getTable($tbl, $col, $id){
		include('config.php');
		$queryTable = "SELECT * FROM {$tbl} WHERE {$col} = {$id}";
		$runTable = mysqli_query($link, $queryTable);

		if($runTable){
			$foundID = mysqli_fetch_array($runTable, MYSQLI_ASSOC);
			return $foundID;
		}else{
			$error =  "There was an error accessing this information. Please contact your admin.";
			return $error;
		}
	mysqli_close($link);
	}

	function deletePost($tbl,$col,$id){
		include('config.php');
		$query = "DELETE FROM {$tbl} WHERE {$col} = {$id}";
		echo $query;
		$run = mysqli_query($link, $query);

		if($run){
			return $run;
		}else{
			$error =  "There was an error accessing this information. Please contact your admin.";
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
			redirect_to('edit_stories.php');
		}else{
			return $error;
		}
	mysqli_close($link);
	}

	function editStory($name,$age,$city,$organ,$story,$video){
		$type = 'written';
		require_once('config.php');
		$query = "UPDATE tbl_stories SET story_name = '{$name}', story_age = '{$age}', story_organ = '{$organ}', story_city = '{$city}', story_text = '{$story}', story_link = '{$video}'";
		$run = mysqli_query($link, $query);

		if($run){
			redirect_to('edit_stories.php');
		}else{
			return $error;
		}
	mysqli_close($link);
	}
?>