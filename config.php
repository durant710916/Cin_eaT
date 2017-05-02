<?php
session_start();
try{
	$config = new PDO('mysql:host=localhost;dbname=cin_eat', 'root' , '');
	$config->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "non-connect" . $e->getMessage();
}
?>