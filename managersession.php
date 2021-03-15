<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!$_SESSION['OFFICIALNAME']) {
		header("location: manager.php");
		exit();
	}
?>