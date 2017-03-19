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

	function addStory($name,$age,$city,$organ,$photo,$story,$video){
		include('config.php');
		$type = 'written';		
		$photo = mysqli_real_escape_string($link,$photo); //gotta clean up the image name, prevent possible injection attacks in image name
		
		if($_FILES['photo']['type'] == "image/jpg" || $_FILES['photo']['type'] == "image/JPG" || $_FILES['photo']['type'] == "image/jpeg" || $_FILES['photo']['type'] == "image/png"){//check and limit file types
			echo "This is an accepted file type";
			$targetpath="../img/{$photo}"; //where to send the file

			if(move_uploaded_file($_FILES['photo']['tmp_name'], $targetpath)){
				//echo "file moved";
				$orig = "../img/{$photo}";
				//$th_copy = "../images/{$thumb}";

				if(!copy($orig)){
					echo "Failed to copy";
				}

				$query = "INSERT INTO tbl_stories VALUES(NULL,'{$name}','{$age}','{$organ}','{$city}','{$type}','{$story}','{$video}','{$photo}')";
				echo $query;
				$run = mysqli_query($link, $query);

				if($run){
					echo "success!";
					//redirect_to('edit_stories.php');
				}
			}
		}else{
			return $error;
		}
	mysqli_close($link);
	}

	function editStory($id,$name,$age,$city,$organ,$photo,$story,$video){
		$type = 'written';
		include('config.php');

		$photo = mysqli_real_escape_string($link,$photo); //gotta clean up the image name, prevent possible injection attacks in image name
		
		if($_FILES['photo']['type'] == "image/jpg" || $_FILES['photo']['type'] == "image/JPG" || $_FILES['photo']['type'] == "image/jpeg" || $_FILES['photo']['type'] == "image/png"){//check and limit file types
			echo "This is an accepted file type";
			$targetpath="../img/{$photo}"; //where to send the file

			if(move_uploaded_file($_FILES['photo']['tmp_name'], $targetpath)){
				$orig = "../img/{$photo}";
				$query = "UPDATE tbl_stories SET story_name = '{$name}', story_age = '{$age}', story_organ = '{$organ}', story_city = '{$city}', story_photo = '{$photo}', story_text = '{$story}', story_link = '{$video}' WHERE story_id = {$id}";
				$run = mysqli_query($link, $query);

				if($run){
					redirect_to('edit_stories.php');
				}
			}
		}else{
			$error =  "There was an error accessing this information. Please contact your admin.";
			return $error;
		}
	mysqli_close($link);
	}
?>