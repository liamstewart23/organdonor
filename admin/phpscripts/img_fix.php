<?php
	//SCALING IMAGES TO A MAX-WIDTH OF 300
	function imageResize($fileType, $targetpath,$resizeFile,$width,$height,$wmax,$hmax){
		list($wfull, $hfull) = getimagesize($targetpath);
		$scale_ratio = $wfull / $hfull;
		echo $scale_ratio;
		echo "  ".$wmax / $hmax;

		if(($wmax / $hmax) > $scale_ratio){
			$wmax = $hmax * $scale_ratio;
		}else{
			$hmax = $wmax / $scale_ratio;
		}

		$img = "";
		//$ext = strtolower($ext);

		if($fileType == "image/jpg" || $fileType == "image/jpeg"){
			$img = imagecreatefromjpeg($targetpath);
		}else if($fileType == "image/png"){
			$img = imagecreatefrompng($targetpath);
		}

		$newImg = imagecreatetruecolor($wmax, $hmax);

		imagecopyresampled($newImg, $img, 0, 0, 0, 0, $wmax, $hmax, $wfull, $hfull);

		$newCopy = $targetpath;

		if($fileType == "image/jpg" || $fileType == "image/jpeg"){
			imagejpeg($newImg, $newCopy);
		}else if($fileType == "image/png"){
			imagepng($newImg, $newCopy);
		}
	}
?>