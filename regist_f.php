<?php
	require_once ('config.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$conpassword = $_POST['conpassword'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$sex = $_POST['sex'];
	$birthday = $_POST['birthday'];
	$phonenumber = $_POST['phonenumber'];	
	$email = $_POST['email'];
	$address = $_POST['address'];
	//少了加密
echo'stupid';
if(isset($_POST['regist'])){
	if(!empty ($_POST['username'])){
		$sql = "SELECT * FROM user WHERE username = :username";
		$query = $config->prepare($sql);
		$query->execute(array(':username'=>$username));
		$row = $query->fetchall();
		if(count($row) > 0)
		{
			echo "<script> alert('That Username or Email already exists! Please change your Username or Email!!'); window.location.assign('regist.php');</script>";
		}
		else{
			if(strstr($email,'@')){
				if($password == $conpassword){
					$sql= "INSERT INTO user (username,password,name,sex,birthday,age,phonenumber,email,address) VALUES(:username,:password,:name,:sex,:birthday,:age,:phonenumber,:email,:address)";
					$query = $config->prepare($sql);
					$result = $query->execute(array(':username'=>$username,':password'=>$password,':name'=>$name,':sex'=>$sex,':birthday'=>$birthday,':age'=>$age,':phonenumber'=>$phonenumber,':email'=>$email,':address'=>$address));
						if($result){
						echo "<script> alert('親愛的貴賓，您現在可以登入了^_^!!.'); window.location.assign('index.php');</script>";}
						else{
						echo "The INSERT isn't work well. PLZ contact admin";}
				}else{
					echo "<script> alert('輸入的密碼與確認密碼不相同，請檢查是否有輸入錯誤！'); window.location.assign('regist.php');</script>";}
			}else{
				echo"<script> alert('Invalid email address'); window.location.assign('regist.php');</script>";}
		}
	}
}
?>