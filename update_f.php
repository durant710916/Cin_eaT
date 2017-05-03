<?php
require_once ('config.php');
if(!$_SESSION['username']){
header('location: index.php');}

$username = $_SESSION['username'];
$newname = $_POST['newname'];
$newsex = $_POST['newsex'];
$newpassword = $_POST['newpassword'];
$connewpassword = $_POST['connewpassword'];
$oldpassword = $_POST['oldpassword'];
$newphonenumber = $_POST['newphonenumber'];
$newemail = $_POST['newemail'];
$newaddress = $_POST['newaddress'];


if(isset($_POST['update'])){
		$sql="SELECT * FROM user WHERE username=:username AND password=:oldpassword";
		$query = $config->prepare($sql);
		$query->execute(array(':username'=>$username,':oldpassword'=>$oldpassword));
		$rows = $query->fetchall();
		if(count($rows)>0){
			if(empty($_POST['newname'])&&empty($_POST['newpassword'])&&empty($_POST['connewpassword'])&&empty($_POST['newphonenumber'])&&empty($_POST['newemail'])&&empty($_POST['newaddress'])&&empty($_POST['newsex']))
			{
				echo"<script type='text/javascript'>
					var a=confirm('您確定不更改資料嗎？');
					if(a==true){
						window.location.assign('index_login.php');
					}
					else{
						window.location.assign('update.php');
					}</script>";
			}
			else{
				if(!empty($_POST['newname']))
				{
					$sql = "UPDATE user SET name=:newname WHERE username=:username";
					$query = $config->prepare($sql);
					$query->execute(array(':newname'=>$newname,':username'=>$username));
					echo"<script> alert('更新成功！'); window.location.assign('index_login.php'); </script>";
				}
				if(!empty($_POST['newpassword'])&&!empty($_POST['connewpassword']))
				{
					if($newpassword == $connewpassword){
						$sql = "UPDATE user SET password=:newpassword WHERE username=:username";
						$query = $config->prepare($sql);
						$query->execute(array(':newpassword'=>$newpassword,':username'=>$username));
						echo"<script> alert('更新成功！'); window.location.assign('index_login.php'); </script>";
					}
					else{
						echo"<script> alert('輸入的新密碼與確認密碼不相同，請檢查是否有輸入錯誤！'); window.location.assign('update.php'); </script>";}
					
				}
				if(!empty($_POST['newemail'])){
						//為何一定要用 prepare 在 execute(array)?? 
						$sql="SELECT * FROM user WHERE email=:newemail";
						$query= $config->prepare($sql);
						$query->execute(array(':newemail'=>$newemail));
						$erows = $query->fetchall();
						if(count($erows)<=0){
							$sql = "UPDATE user SET email=:newemail WHERE username=:username";
							$query = $config->prepare($sql);
							$query->execute(array(':newemail'=>$newemail,':username'=>$username));
							echo"<script> alert('更新成功！'); window.location.assign('index_login.php'); </script>";
						}
						else{
							echo"<script> alert('此信箱已有人註冊過，請重新輸入有效信箱！'); window.location.assign('update.php'); </script>";}
				}
				if(!empty($_POST['newphonenumber']))
				{
					$sql = "UPDATE user SET phonenumber=:newphonenumber WHERE username=:username";
					$query = $config->prepare($sql);
					$query->execute(array(':newphonenumber'=>$newphonenumber,':username'=>$username));
					echo"<script> alert('更新成功！'); window.location.assign('index_login.php'); </script>";
				}
				if(!empty($_POST['newaddress']))
				{
					$sql = "UPDATE user SET address=:newaddress WHERE username=:username";
					$query = $config->prepare($sql);
					$query->execute(array(':newaddress'=>$newaddress,':username'=>$username));
					echo"<script> alert('更新成功！'); window.location.assign('index_login.php'); </script>";
				}
				if(!empty($_POST['newsex']))
				{
					$sql = "UPDATE user SET sex=:newsex WHERE username=:username";
					$query = $config->prepare($sql);
					$query->execute(array(':newsex'=>$newsex,':username'=>$username));
					echo"<script> alert('更新成功！'); window.location.assign('index_login.php'); </script>";
				}
			}
		}
		else{
			echo"<script> alert('如果不是本人，請勿修改個人資料！'); window.location.assign('update.php'); </script>";}
	}

?>