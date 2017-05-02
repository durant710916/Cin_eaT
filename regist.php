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
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> 登入</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>*Register</h1> 
</div>

	

<!--註冊資訊-->
<form method="post" action="regist_f.php" name="regist">
<div id="about" class="container-fluid">
  <div class="col-sm-4 col-sm-offset-4">
	<div class="form-group">
	  <label>帳號:</label>
      <input type="text" class="form-control" name="username" placeholder="  請輸入註冊帳號" required oninvalid="setCustomValidity('必要欄位，請填寫');"oninput="setCustomValidity('');"/>
    </div>
    <div class="form-group">
      <label>密碼:</label>
      <input type="password" class="form-control" name="password" placeholder="  請輸入註冊密碼" required oninvalid="setCustomValidity('必要欄位，請填寫');"oninput="setCustomValidity('');"/>
    </div>
	<div class="form-group">
      <label>確認密碼:</label>
      <input type="password" class="form-control" name="conpassword" placeholder="  請再次輸入密碼確認" required oninvalid="setCustomValidity('必要欄位，請填寫');"oninput="setCustomValidity('');"/>
    </div>
    <div class="form-group">
	  <label>姓名:</label>
      <input type="text" class="form-control" name="name" placeholder="  請輸入姓名" required oninvalid="setCustomValidity('必要欄位，請填寫');"oninput="setCustomValidity('');"/>
    </div>
	<div class="form-group">
	<form class="form-horizontal">
	  <label class="control-label" id="label-marginL" >年齡:</label>
      <input style="width:40px;" type="number" name="age" min="15" max="99"/>
	  <label id="label-marginC">性別:</label>
	  <label>
		<input type="radio" name="sex" value="M" checked/>男
		<input type="radio" name="sex" value="F"/>女
	  </label>
	</form>
	</div>	
	<div class="form-group">
	  <label>生日:</label>
      <input type="text" class="form-control" name="birthday" placeholder="  請輸入( e.g 19990112 )" required oninvalid="setCustomValidity('必要欄位，請填寫');"oninput="setCustomValidity('');" />
    </div>
	
	<div class="form-group">
      <label>手機:</label>
      <input type="text" class="form-control" name="phonenumber" placeholder="  請輸入手機" required oninvalid="setCustomValidity('必要欄位，請填寫');"oninput="setCustomValidity('');"/>
    </div>
	<div class="form-group">
      <label>信箱:</label>
      <input type="email" class="form-control" name="email" placeholder="  請輸入註冊信箱" required oninvalid="setCustomValidity('必要欄位，請填寫');"oninput="setCustomValidity('');"/>
    </div>
	<div class="form-group">
      <label>地址:</label>
      <input type="text" class="form-control" name="address" placeholder="  請輸入外送地址(之後可修改)" required oninvalid="setCustomValidity('必要欄位，請填寫');"oninput="setCustomValidity('');"/>
    </div>
		
	<div class="text-center">
		<br></br>
		<input type="submit" class="btn btn-success btn-md centered" name="regist" value="註冊">
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
