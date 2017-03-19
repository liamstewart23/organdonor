<?php
	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}
	function previous_page(){
		header("Location: {$_SERVER['HTTP_REFERER']}");
		exit;
	}
?>