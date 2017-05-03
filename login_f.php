<?php
require_once ('config.php');
if(!$_SESSION['username']){
header('location: index.php');}

if(isset($_POST['login'])){
	if(!empty($_POST['username'])&&!empty($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		try{
			$query = $config->prepare("SELECT * FROM user WHERE username=:username AND password = :password");
			$query->execute(array('username' => $username,'password' => $password));
			$result = $query->setFetchMODE(PDO::FETCH_ASSOC);
			$rows = $query->fetchall();
			if(count($rows)>0){
				$_SESSION['username'] = $username;
				$_SESSION['testlog'] = 1;
				header('location: index_login.php');
			}
			else{
				$_SESSION['testlog'] = 0;
				echo"<script> alert('無效的帳號或者無效的密碼，請再次確認！'); window.location.assign('login.php'); </script>";
			}
		}
		catch(PDOException $e)
		{
			echo "Error". $e->getMessage();
		}
	}
	else{
		echo"<script>
			alert('請輸入您的帳號和密碼！'); window.location.assign('index.php'); </script>";
	}
}

?>