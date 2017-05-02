<?php
	require_once ('config.php');
	$username = $_SESSION['username'];
	$comment = $_POST['comment'];
if(isset($_POST['COMMENT'])){
	if(!empty($username)){
		$sql = "INSERT INTO comment (username,comment) VALUES(:username,:comment)";
		$query = $config->prepare($sql);
		$result = $query->execute(array(':username'=>$username,':comment'=>$comment));
		if($result){
			echo "<script> alert('You comment successfully!!!.');window.location.assign('store_info.php'); </script>";}
	}
}
?>