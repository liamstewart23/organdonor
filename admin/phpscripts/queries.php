<?php

	// ----- GET ALL FROM ONE TABLE ----- //
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

	// ----- GET ONE ENTRY FROM A TABLE ----- //
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

	// ----- DELETE POST ----- //
	function deletePost($tbl,$col,$id){
		include('config.php');

		/*if($tbl == "tbl_stories"){ //trying to delete file from photo folder
			$query = "SELECT * FROM {$tbl}";
			$run = mysqli_query($link, $query);
			$find = mysqli_fetch_array($run, MYSQLI_ASSOC);
			echo $find['story_photo'];

			unlink(realpath("../../img/stories/uploads/{$find['story_photo']}"));
		}*/

		$query = "DELETE FROM {$tbl} WHERE {$col} = {$id}";
		$run = mysqli_query($link, $query);

		if($run){
			return $run;
		}else{
			$error =  "There was an error accessing this information. Please contact your admin.";
			return $error;
		}
	mysqli_close($link);
	}

	// ----- SEND EMAIL ----- //
	function sendMessage($name,$email,$subject,$msg,$direct) {
		$to = "becauseadonor@gmail.com";
		$from = "Reply-To: {$email}";
		$body = "From: {$name}\n\nMessage: {$msg}";
		mail($to, $subject, $body, $from);
		redirect_to($direct);	}

	// ----- MYTHS VS FACTS FUNCTIONS ----- //

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

	function editMythFact($id,$myth,$fact,$keyword){
		include('config.php');
		$myth = mysqli_real_escape_string($link,$myth);
		$fact = mysqli_real_escape_string($link,$fact);
		$keyword = mysqli_real_escape_string($link,$keyword);
		$query = "UPDATE tbl_myths_facts SET mf_myth = '{$myth}', mf_fact = '{$fact}', mf_keywords = '{$keyword}' WHERE mf_id = {$id}";
		echo $query;
		$run = mysqli_query($link, $query);

		if($run){
			redirect_to('edit_mythfact.php');
		}else{
			$error =  "There was an error accessing this information. Please contact your admin.";
			return $error;
		}
	mysqli_close($link);
	}


	// ----- STATISTIC FUNCTIONS ----- //

	function addStat($text,$image){
		include('config.php');
		require_once('img_fix.php');

		//Keep paragraphs seperated in database - prevents all text from being on one line
		nl2br($text);

		//prevent possible SQLI injection attacks
		$image = mysqli_real_escape_string($link,$image);

		//Set Timezone, get date for image name (M = Month, d = day, Y = year, H = hour(24), i = minute, s = second, ex. Jan_01_2017_030201)
		date_default_timezone_set('America/Toronto');
		$date = date("M_d_Y_His");
		
		//CHECK IF FILE IS JPG, JPEG OR PNG
		$photoName = $_FILES['image']['name'];
		$fileType = $_FILES['image']['type'];
		$fileName = $_FILES['image']['tmp_name'];
		$fileSize = $_FILES['image']['size'];
		$ext = pathinfo($photoName, PATHINFO_EXTENSION);
		$newImage = $date.".".$ext;

		if($fileType == "image/jpg" || $fileType == "image/jpeg" || $fileType == "image/png" && $fileSize < (50*1024*1024)){//check and limit file types //50MB

			$targetpath = "../img/learn/stats/{$newImage}"; //where to send & name the file
			$moveFile = move_uploaded_file($fileName, $targetpath);
			if (!$moveFile){
				echo "Error copying file";
			}

			//FILE SIZE FOR LEARN STAT IMAGE
			$wmin = 450;
			$hmin = 300;
			$wmax = 450;
			$hmax = 300;
			imageResize($fileType, $targetpath,$wmin,$hmin,$wmax,$hmax); //Send to resize file

			$query = "INSERT INTO tbl_statistics VALUES(NULL,'{$newImage}','{$text}')";
			$run = mysqli_query($link, $query);

			if($run){
				redirect_to('edit_stats.php');
			}else{
				$message = "There was an error entering this information. Please contact your admin.";
				return $message;
			}
		}else if($fileType == "image/svg+xml" && $fileSize < (50*1024*1024)){ //50MB

			$targetpath = "../img/learn/stats/{$newImage}"; //where to send & name the file
			$moveFile = move_uploaded_file($fileName, $targetpath);
			if (!$moveFile){
				echo "Error copying file";
			}

			$query = "INSERT INTO tbl_statistics VALUES(NULL,'{$newImage}','{$text}')";
			$run = mysqli_query($link, $query);

			if($run){
				redirect_to('edit_stats.php');
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

	function editStat($id,$text,$image){
		$type = 'written';
		include('config.php');
		echo "Hello";

		if(!empty($image)){		
			require_once('img_fix.php');

			//Keep paragraphs seperated in database - prevents all text from being on one line
			nl2br($text);

			//prevent possible SQLI injection attacks
			$image = mysqli_real_escape_string($link,$image);

			//Set Timezone, get date for image name (M = Month, d = day, Y = year, H = hour(24), i = minute, s = second, ex. Jan_01_2017_030201)
			date_default_timezone_set('America/Toronto');
			$date = date("M_d_Y_His");
			
			//CHECK IF FILE IS JPG, JPEG OR PNG
			$photoName = $_FILES['image']['name'];
			$fileType = $_FILES['image']['type'];
			$fileName = $_FILES['image']['tmp_name'];
			$fileSize = $_FILES['image']['size'];
			$ext = pathinfo($photoName, PATHINFO_EXTENSION);
			$newImage = $date.".".$ext;

			if($fileType == "image/jpg" || $fileType == "image/jpeg" || $fileType == "image/png" && $fileSize < (50*1024*1024)){//check and limit file types //50MB

				$targetpath = "../img/learn/stats/{$newImage}"; //where to send & name the file
				$moveFile = move_uploaded_file($fileName, $targetpath);
				if (!$moveFile){
					echo "Error copying file";
				}

				//FILE SIZE FOR LEARN STAT IMAGE
				$wmin = 450;
				$hmin = 300;
				$wmax = 450;
				$hmax = 300;
				imageResize($fileType, $targetpath,$wmin,$hmin,$wmax,$hmax); //Send to resize file

				$query = "UPDATE tbl_statistics SET stat_img = '{$newImage}', stat_text = '{$text}' WHERE stat_id = {$id}";
				$run = mysqli_query($link, $query);
				
				if($run){
					redirect_to('edit_stats.php');
				}
			} else if($fileType == "image/svg+xml" && $fileSize < (50*1024*1024)){ //50MB

				$targetpath = "../img/learn/stats/{$newImage}"; //where to send & name the file
				$moveFile = move_uploaded_file($fileName, $targetpath);
				if (!$moveFile){
					echo "Error copying file";
				}

				$query = "UPDATE tbl_statistics SET stat_img = '{$newImage}', stat_text = '{$text}' WHERE stat_id = {$id}";
				$run = mysqli_query($link, $query);

				if($run){
					redirect_to('edit_stats.php');
				}else{
					$message = "There was an error entering this information. Please contact your admin.";
					return $message;
				}
			}else{
				$error =  "There was an error accessing this information. Please contact your admin.";
				return $error;
			}
		}else if(empty($image)){
			$query = "UPDATE tbl_statistics SET stat_text = '{$text}' WHERE stat_id = {$id}";
				$run = mysqli_query($link, $query);
				
				if($run){
					redirect_to('edit_stats.php');
				}else{
					$error =  "There was an error accessing this information. Please contact your admin.";
					return $error;
				}
			}
		mysqli_close($link);
		}


	// ----- STORY FUNCTIONS ----- //

	function addStory($name,$city,$organ,$photo,$thumb,$story,$video,$type,$status){
		include('config.php');
		require_once('img_fix.php');

		//Keep paragraphs seperated in database - prevents all text from being on one line
		nl2br($story);

		//prevent possible SQLI injection attacks
		$name = mysqli_real_escape_string($link,$name);
		$city = mysqli_real_escape_string($link,$city);
		$organ = mysqli_real_escape_string($link,$organ);
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

			$query = "INSERT INTO tbl_stories VALUES(NULL,'{$name}','{$organ}','{$city}','{$type}','{$story}','{$video}','{$newImage}','{$status}')";
			$run = mysqli_query($link, $query);

			if($run){
				return $run;
				//redirect_to('edit_stories.php');
			}else{
				$message = "There was an error entering this information. Please contact your admin.";
				return $message;
			}
		}else{
			$message =  "There was an error adding your image. Please try again.";
			return $message;
		}
	mysqli_close($link);
	}

	function editStory($id,$name,$city,$organ,$photo,$story,$video,$status){
		include('config.php');
		require_once('img_fix.php');

		//Keep paragraphs seperated in database - prevents all text from being on one line
		nl2br($story);


		//prevent possible SQLI injection attacks
		$story = mysqli_real_escape_string($link,$story);
		$video = mysqli_real_escape_string($link,$video);
		$photo = mysqli_real_escape_string($link,$photo);
		//echo $photo;

		if(!empty($photo)){//echo "Working";
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

			if($fileType == "image/jpg" || $fileType == "image/jpeg" || $fileType == "image/png" && $fileSize < (50*1024*1024)){//check and limit file types //50MB

				$targetpath = "../img/stories/uploads/{$newImage}"; //where to send & name the file
				$moveFile = move_uploaded_file($fileName, $targetpath);
				if (!$moveFile){
					//echo "Error copying file";
				}

				//FILE SIZE FOR STORY AUTHOR IMAGE
				$wmin = 450;
				$hmin = 300;
				$wmax = 450;
				$hmax = 300;
				imageResize($fileType, $targetpath,$wmin,$hmin,$wmax,$hmax); //Send to resize file
				
				$query = "UPDATE tbl_stories SET story_name = '{$name}', story_organ = '{$organ}', story_city = '{$city}', story_photo = '{$newImage}', story_text = '{$story}', story_link = '{$video}', story_status = '{$status}' WHERE story_id = {$id}";
				$run = mysqli_query($link, $query);
				//echo $query;
				if($run){
					return $run;
					//redirect_to('edit_stories.php');
				}else{
					$error = "There was an error accessing this information. Please contact your admin.";
					return $error;
				}
			}
		}else if(empty($photo)){ //if photo hasn't been updated
			$query = "UPDATE tbl_stories SET story_name = '{$name}', story_organ = '{$organ}', story_city = '{$city}',  story_text = '{$story}', story_link = '{$video}', story_status = '{$status}'  WHERE story_id = {$id}";
				$run = mysqli_query($link, $query);
				//echo $query;

				if($run){
					return $run;
					//redirect_to('edit_stories.php');
				}else{
					$error = "There was an error accessing this information. Please contact your admin.";
					return $error;
				}
		}else{
			$error =  "There was an error accessing this information. Please contact your admin.";
			return $error;
		}
	mysqli_close($link);
	}	
?>