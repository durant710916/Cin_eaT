<?php
	require_once ('config.php');
		
	$comment = $_POST['comment'];
if(isset($_POST['COMMENT'])){
	if($_SESSION['testlog']){
		$username = $_SESSION['username'];
		$sql = "INSERT INTO comment (username,comment) VALUES(:username,:comment)";
		$query = $config->prepare($sql);
		$result = $query->execute(array(':username'=>$username,':comment'=>$comment));
		if($result){
			echo "<script> alert('感謝您所給的寶貴評論 ^_^.');window.location.assign('store_info.php'); </script>";}
	}
	else{
		$sql = "INSERT INTO comment (comment) VALUES(:comment)";
		$query = $config->prepare($sql);
		$result = $query->execute(array(':comment'=>$comment));
		if($result){
			echo "<script> alert('感謝您所給的寶貴評論 ^_^.');window.location.assign('store_info.php'); </script>";}
	}
}
?>