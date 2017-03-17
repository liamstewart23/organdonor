<?php
	session_start(); //method

	function confirm_logged_in() { //make sure that user is logged in before accessing page
		if(!isset($_SESSION['users_creds'])){
			redirect_to('admin_login.php');
		} else {

		}
	}

	function editor_only() { //only editors allowed on this page
		if($_SESSION['users_level'] == 2 || $_SESSION['users_level'] == 3){
			redirect_to('admin_index.php');
		}
	}

	function admin_only() { //only admins (admin & super admin) allowed on this page
		
		if($_SESSION['users_level'] == 1){
			redirect_to('editor_index.php');
		}
	}

	function logged_out() {
		session_destroy();
		redirect_to('../admin_login.php'); // need ../ so that we are going out of our folder to find this file
	}

?>
