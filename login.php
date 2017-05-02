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
      <a class="navbar-brand" href="index.php">Logo</a>
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
		<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> 回首頁</a></li>
		<li><a href="regist.php"><span class="glyphicon glyphicon-plus"></span> 註冊</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>*Login</h1> 
</div>

	

<!--登入資訊-->
<form method="post" action="login_f.php" name="login">
<div id="about" class="container-fluid">
  <div class="col-sm-4 col-sm-offset-4">
	<div class="form-group">
	  <label>帳號:</label>
      <input type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
      <label>密碼:</label>
      <input type="password" class="form-control" name="password">
    </div>
	  <div class="text-center">
		<br></br>
		<input type="submit" class="btn btn-success btn-md centered" name="login" value="登入">
		  <p>還沒註冊嗎? 請右上角先註冊</p>
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
