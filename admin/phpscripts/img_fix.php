<?php
	//SCALING IMAGES TO A MAX-WIDTH OF 300
	function imageResize($fileType, $targetpath,$wmin,$hmin,$wmax,$hmax){
		list($wfull, $hfull) = getimagesize($targetpath);
		$scale_ratio = $wfull / $hfull;

		//SCALE IMAGE DOWN TO MIN WIDTH VARIABLES
		if(($wmin / $hmin) < $scale_ratio){
			$wmin = $hmin * $scale_ratio;
		}else{
			$hmin = $wmin / $scale_ratio;
		}

		//CROP POSITION VARIABLES
		$xcrop = ($wmin / 2) - ($wmax / 2);
		$ycrop = ($hmin / 2) - ($hmax / 2);

		$img = "";

		if($fileType == "image/jpg" || $fileType == "image/jpeg"){
			$img = imagecreatefromjpeg($targetpath);
		}else if($fileType == "image/png"){
			$img = imagecreatefrompng($targetpath);
		}

		$newImg = imagecreatetruecolor($wmax, $hmax);

		imagecopyresampled($newImg, $img, 0, 0, $xcrop, $ycrop, $wmin, $hmin, $wfull, $hfull);

		$newCopy = $targetpath;

		if($fileType == "image/jpg" || $fileType == "image/jpeg"){
			imagejpeg($newImg, $newCopy);
		}else if($fileType == "image/png"){
			imagepng($newImg, $newCopy);
		}

		echo $newCopy;
	}
