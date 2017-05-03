<?php
require_once('config.php');
if(!$_SESSION['username']){
	header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cin_eaT</title>
  <script>
		function go(){
			if(confirm("您確認要修改資料嗎？")){
			return true;
			}else{
			return false;
			}
		}
		</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link type="text/css" rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	    <ul class="nav navbar-nav">
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
            <ul class="dropdown-menu">
			  <li><a href="#">速食</a></li>
              <li><a href="#">中式</a></li>
              <li><a href="#">日式</a></li>
			  <li><a href="#">西式</a></li>
            </ul>
          </li>
        </ul>
      <a class="navbar-brand" href="index_login.php">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	    <!--登入連結網址-->
		<li>
		<form class="form-inline">
			<div class="input-group">
				<input type="search" class="form-control" size="10" placeholder="搜尋店家" required id="store">
			<div class="input-group-btn">
				<button type="button" class="btn btn-danger">Search</button>
			</div>
			</div>
		</form>
		</li>
		 <li><a href="member.php"><span class="glyphicon glyphicon-user"></span>&nbsp;歡迎&nbsp; <?php echo $_SESSION['username'];?></a></li>
		 <li><a href="index_login.php"><span class="glyphicon glyphicon-home"></span> 回首頁</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>*Update</h1> 
</div>

<!--更新資訊-->
<form method="post" action="update_f.php" name="update" onSubmit="return go(this)">
<div id="about" class="container-fluid">
  <div class="col-sm-4 col-sm-offset-4">
	<div class="form-group">
      <label>新密碼:</label>
      <input type="password" class="form-control" name="newpassword">
    </div>
	<div class="form-group">
      <label>確認新密碼:</label>
      <input type="password" class="form-control" name="connewpassword">
    </div>
    <div class="form-group">
	  <label>姓名:</label>
      <input type="text" class="form-control" name="newname">
    </div>
	<div class="form-group">
	<form class="form-horizontal">
	<label id="label-marginC">性別:</label>
	  <label>
		<input type="radio" name="newsex" value="M" checked/>男
		<input type="radio" name="newsex" value="F"/>女
	  </label>
	</form>
	</div>
	<div class="form-group">
      <label>信箱:</label>
      <input type="email" class="form-control" name="newemail">
    </div>
	<div class="form-group">
      <label>手機:</label>
      <input type="text" class="form-control" name="newphonenumber">
    </div>
	<div class="form-group">
      <label>地址:</label>
      <input type="text" class="form-control" name="newaddress">
    </div>
		
	
	<div class="form-group">
		<br></br>
      <label>輸入舊密碼確認身分:</label>
      <input type="password" class="form-control" name="oldpassword" required oninvalid="setCustomValidity('必要欄位，請填寫');"oninput="setCustomValidity('');">
    </div>
	<div class="text-center">
		<br></br>
		<input type="submit" class="btn btn-primary btn-md centered" name="update" value="確認更新">
	  </div>
	
  </div>
</div>
</form>
	
