<?php
require_once ('config.php');

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
				header('location: index_login.php');
			}
			else{
				echo"<script> alert('Invalid username or password'); window.location.assign('login.php'); </script>";
			}
		}
		catch(PDOException $e)
		{
			echo "Error". $e->getMessage();
		}
	}
	else{
		echo"<script>
			alert('Plz Enter Username And Password'); window.location.assign('index.php'); </script>";
	}
}

?>