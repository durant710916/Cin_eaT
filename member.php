<?php 
require_once ('config.php');
if(!$_SESSION['username']){
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cin_eaT</title>
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
  <h1>*Member</h1> 
</div>


<!--會員管理-->
<form method="post" action="login_f.php" name="login">
<div id="about" class="container-fluid">
  <div class="col-sm-4 col-sm-offset-4">
	  <div class="text-center">
		<br></br>
		<input type="button" value="更新會員資料" onClick="window.location.assign('update.php')" class="btn btn-primary btn-md centered"/> 
	  </div>
  </div>
</div>
</form>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>	
  </a>
</footer>
<script src="code.js"></script>

</body>
</html>
