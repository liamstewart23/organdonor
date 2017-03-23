<?php

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

	function addMythFact($myth,$fact,$keyword){
		include('config.php');
		$query = "INSERT INTO tbl_myths_facts VALUES(NULL,'{$myth}','{$fact}','{$keyword}')";
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

	function addStatistic(){
		include('config.php');
		require_once('img_fix.php');

		//Keep paragraphs seperated in database - prevents all text from being on one line
		nl2br($story);

		//prevent possible SQLI injection attacks
		$story = mysqli_real_escape_string($link,$story);
		$video = mysqli_real_escape_string($link,$video); 
		$photo = mysqli_real_escape_string($link,$photo);

		//Set Timezone, get date for image name (M = Month, d = day, Y = year, H = hour(24), i = minute, s = second, ex. Jan_01_2017_030201)
		date_default_timezone_set('America/Toronto');
		$date = date("M_d_Y_His");
		
		//CHECK IF FILE IS JPG, JPEG OR PNG
		$photoName = $_FILES['photo']['name'];
		$fileType = $_FILES['photo']['type'];
		$fileName = $_FILES['photo']['tmp_name'];
		$fileSize = $_FILES['photo']['size'];
		$ext = pathinfo($photoName, PATHINFO_EXTENSION);
		$newImage = $date.".".$ext;

		if($fileType == "image/jpg" || $fileType == "image/jpeg" || $fileType == "image/png" && $fileSize < 200){//check and limit file types

			$targetpath = "../img/stories/uploads/{$newImage}"; //where to send & name the file
			$moveFile = move_uploaded_file($fileName, $targetpath);
			if (!$moveFile){
				echo "Error copying file";
			}

			//FILE SIZE FOR STORY AUTHOR IMAGE
			$wmin = 450;
			$hmin = 300;
			$wmax = 450;
			$hmax = 300;
			imageResize($fileType, $targetpath,$wmin,$hmin,$wmax,$hmax); //Send to resize file

			$query = "INSERT INTO tbl_stories VALUES(NULL,'{$name}','{$age}','{$organ}','{$city}','{$type}','{$story}','{$video}','{$newImage}')";
			$run = mysqli_query($link, $query);

			if($run){
				redirect_to('edit_stories.php');
			}else{
				$message = "There was an error entering this information. Please contact your admin.";
				return $message;
			}
		}else{
			$error =  "There was an error adding your image. Please try again.";
			return $error;
		}
	mysqli_close($link);

	}

	function addStory($name,$age,$city,$organ,$photo,$thumb,$story,$video,$type){
		include('config.php');
		require_once('img_fix.php');

		//Keep paragraphs seperated in database - prevents all text from being on one line
		nl2br($story);

		//prevent possible SQLI injection attacks
		$story = mysqli_real_escape_string($link,$story);
		$video = mysqli_real_escape_string($link,$video); 
		$photo = mysqli_real_escape_string($link,$photo);

		//Set Timezone, get date for image name (M = Month, d = day, Y = year, H = hour(24), i = minute, s = second, ex. Jan_01_2017_030201)
		date_default_timezone_set('America/Toronto');
		$date = date("M_d_Y_His");
		
		//CHECK IF FILE IS JPG, JPEG OR PNG
		$photoName = $_FILES['photo']['name'];
		$fileType = $_FILES['photo']['type'];
		$fileName = $_FILES['photo']['tmp_name'];
		$fileSize = $_FILES['photo']['size'];
		echo $fileSize;
		echo $fileName;
		echo $fileType;
		$ext = pathinfo($photoName, PATHINFO_EXTENSION);
		$newImage = $date.".".$ext;

		if($fileType == "image/jpg" || $fileType == "image/jpeg" || $fileType == "image/png" && $fileSize < (50*1024*1024)){//check and limit file types //50MB

			$targetpath = "../img/stories/uploads/{$newImage}"; //where to send & name the file
			$moveFile = move_uploaded_file($fileName, $targetpath);
			if (!$moveFile){
				echo "Error copying file";
			}

			//FILE SIZE FOR STORY AUTHOR IMAGE
			$wmin = 450;
			$hmin = 300;
			$wmax = 450;
			$hmax = 300;
			imageResize($fileType, $targetpath,$wmin,$hmin,$wmax,$hmax); //Send to resize file

			$query = "INSERT INTO tbl_stories VALUES(NULL,'{$name}','{$age}','{$organ}','{$city}','{$type}','{$story}','{$video}','{$newImage}')";
			$run = mysqli_query($link, $query);

			if($run){
				redirect_to('edit_stories.php');
			}else{
				$message = "There was an error entering this information. Please contact your admin.";
				return $message;
			}
		}else{
			$error =  "There was an error adding your image. Please try again.";
			return $error;
		}
	mysqli_close($link);
	}


	/*function addStory($name,$age,$city,$organ,$photo,$thumb,$story,$video,$type){
		include('config.php');
		$photo = mysqli_real_escape_string($link,$photo); //Clean up the image name, prevent possible injection attacks in image name
		
		//CHECK IF FILE IS JPG, JPEG OR PNG
		if($_FILES['photo']['type'] == "image/jpg" || $_FILES['photo']['type'] == "image/JPG" || $_FILES['photo']['type'] == "image/jpeg" || $_FILES['photo']['type'] == "image/png"){//check and limit file types
			echo "This is an accepted file type";
			$targetpath="../img/{$photo}"; //where to send the file

			//MOVE FILE AND RENAME
			if(move_uploaded_file($_FILES['photo']['tmp_name'], $targetpath)){
				//echo "file moved";
				$upload = "../img/{$photo}";
				$th_upload = "../img/{$thumb}";

				$size = getimagesize($upload);
				//echo $size[0]; //size is an array. width is [0], height is [1]
				$width = $size[0];
				$height = $size[1];
				echo $width."x".$height;


				if(!copy($upload,$th_upload)){
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
			$error =  "There was an error accessing this information. Please contact your admin.";
			return $error;
		}
	mysqli_close($link);
	}*/

	function editStory($id,$name,$age,$city,$organ,$photo,$story,$video){
		$type = 'written';
		include('config.php');

		$photo = mysqli_real_escape_string($link,$photo); //gotta clean up the image name, prevent possible injection attacks in image name
		
		if($_FILES['photo']['type'] == "image/jpg" || $_FILES['photo']['type'] == "image/jpeg" || $_FILES['photo']['type'] == "image/png"){//check and limit file types
			echo "This is an accepted file type";
			$targetpath="../img/{$photo}"; //where to send the file

			if(move_uploaded_file($_FILES['photo']['tmp_name'], $targetpath)){
				$orig = "../img/{$photo}";
				$query = "UPDATE tbl_stories SET story_name = '{$name}', story_age = '{$age}', story_organ = '{$organ}', story_city = '{$city}', story_photo = '{$photo}', story_text = '{$story}', story_link = '{$video}' WHERE story_id = {$id}";
				$run = mysqli_query($link, $query);
				echo $query;
				if($run){
					//redirect_to('edit_stories.php');
				}
			}
		}else{
			$error =  "There was an error accessing this information. Please contact your admin.";
			return $error;
		}
	mysqli_close($link);
	}

	
?>