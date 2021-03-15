<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset ($_SESSION['USERNAME'])) {
		header("location: stationadmin.php");
		exit();
	}
?>