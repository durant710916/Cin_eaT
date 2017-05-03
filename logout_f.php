<?php
require_once('config.php');
if(!$_SESSION['username']){
header('location: index.php');}

	session_start();
	session_destroy();
	
	header('location: index.php');
?>