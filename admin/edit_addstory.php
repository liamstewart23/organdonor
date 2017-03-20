<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();

	if (empty($_GET['type'])){//prevent people from typing in admin_edituser with no id
		redirect_to('admin_stories.php');
	}

	$type = $_GET['type'];

	if(isset($_POST['submit'])){
		
		$name = trim($_POST['name']);
		$age = trim($_POST['age']);
		$city = trim($_POST['city']);
		$organ = trim($_POST['organ']);
		$photo = $_FILES['photo']['name'];
		$thumb = "th_{$photo}";
		$video = "";
		$story = "";
		if($type == "written"){
			$story = trim($_POST['story']);
			$addStory = addStory($name,$age,$city,$organ,$photo,$thumb,$story,$video,$type);
			$message = $addStory;
		}else if($type == "video"){
			$video = trim($_POST['video']);
			$addStory = addStory($name,$age,$city,$organ,$photo,$thumb,$story,$video,$type);
			$message = $addStory;
		}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Stories</title>
<link rel="stylesheet" href="css/main.css"/>
</head>

	<body>
	<h1>Stories</h1>
		<?php if(!empty($message)){echo $message;} ?>
		<?php echo "<form action=\"edit_addstory.php?type={$type}\" method=\"post\" enctype=\"multipart/form-data\">"; ?>
		<h2>Add a New Story</h2>

			<div class="upForm">
				<label>Name:</label><br>
				<input required type="text" name="name" value="<?php if(!empty($name)){echo $name;} ?>"><br>

				<label>Age:</label><br>
				<input required type="text" name="age" value="<?php if(!empty($age)){echo $age;} ?>"><br>

				<label>City:</label><br>
				<input required type="text" name="city" value="<?php if(!empty($city)){echo $city;} ?>"><br>

				<label>Organ:</label><br>
				<input required type="text" name="organ" value="<?php if(!empty($organ)){echo $organ;} ?>"><br>

				<label>Photo:</label><br>
				<input required type="file" name="photo" value="<?php if(!empty($photo)){echo $photo;} ?>"><br>

				<?php 
					if($type == "written"){
						echo 	"<label>Written Story:</label><br>
								<input required type=\"text\" name=\"story\" value=\"";
								if(!empty($story)){echo $story;}
						echo 	"\";><br>";
					}else if ($type == "video"){
						echo 	"<label>Youtube Embeded Link:</label><br>
								<input required type=\"text\" name=\"video\" value=\"";
								if(!empty($video)){echo $video;}
						echo 	"\";><br>";
					}
				?>
			</div>

			<div class="addbtn">
				<input type="submit" name="submit" value="Add Story">
			</div>

		</form>

	</body>
</html>