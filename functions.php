<?php

	require_once("../configglobal.php");
	require_once("User.class.php");
	
	$database = "if15_kenaon";
	
	session_start();
	
	$mysqli = new mysqli($servername, $server_username, $server_password, $database);
	
	$User = new User ($mysqli);
	
?>