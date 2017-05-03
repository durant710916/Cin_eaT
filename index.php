<?php 
require_once ('config.php');
$_SESSION['testlog'] = 0;
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
		<a class="navbar-brand" href="index.php">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	    <!--登入連結網址-->
		<li>
		<form class="form-inline">
			<div class="input-group">
				<input type="text" class="form-control" size="10" placeholder="搜尋店家" required id="store">
			<div class="input-group-btn">
				<button type="button" class="btn btn-danger">Search</button>
			</div>
			</div>
		</form>
		</li>
		<li><a href="regist.php"><span class="glyphicon glyphicon-plus"></span> 註冊</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> 登入</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <img src="logo.png" width= 20% height= auto>
	<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- 活動卷軸 -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>「麥當勞最好吃!」<br><span>王語萱</span></h4>
      </div>
      <div class="item">
        <h4>「二餐燒臘第一！」<br><span>蔡綺真</span></h4>
      </div>
      <div class="item">
        <h4>「女二豚丼啦～」<br><span>陳信全．黃楚耘</span></h4>
      </div>
    </div>

    <!-- 活頁卷軸按鈕 -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
	</div>
	</div>
</div>

	

<!-- 精選店家-->
<div id="about" class="container-fluid">
  <h2 class="text-center">精選店家</h2>
  <div class="row">
    <div class="col-sm-4 text-right">
		<img src="店家資訊/山房/2.jpg" width= 80% height= auto>
	</div>	
    <div class="col-sm-7">
	  <h3>山房</h3>
      <p>山房沒有繁複的設計和特定的風格，是一間小小溫馨的店家，是帶給大家早午餐的好地方。而且大部分都以手工自製的食材提供給客人，給人自然的好味道。相信山房這間小店，會逐漸地在大家的心理擁有不可取代性。</p>
	  <a href='store_info.php' class="btn btn-default btn-md">前往</a>
	  
    </div>	
  </div>
   
   <br>></br>
  
  <div class="row">
	<div class="col-sm-4 text-right">
		<img src="餐廳照片/女二餐.jpg" width= 80% height= auto>
	</div>
	
    <div class="col-sm-7">
	  <h3>女二餐</h3>
      <p>時尚溫馨的概念設計，摩登舒適的美饌空間，設有84人座位。純白明亮的L形吧台，妝點豐富、精緻的中西式菜色，飯店大廚每日新鮮、健康的烹調方式，讓您在始於晨的一日之計，愜意享用四季變化在地料理。</p>
      <button class="btn btn-default btn-md">前往</button>
    </div>	
  </div>
   
   	<br></br>
  
  <div class="row">
    <div class="col-sm-4 text-right">
		<img src="餐廳照片/二餐.jpg" width= 80% height= auto>
	</div>	
    <div class="col-sm-7">
	  <h3>二餐</h3>
      <p>餐飲內容務求多樣化，舉凡中式飯、麵，西式排餐、義大利麵等，應有盡有，任君選擇。除自助餐、小吃部外，還有麵包店、冷熱飲店、水果部、咖啡簡餐、麥當勞及便利商店等，共計19家商店。</p>
	  <button class="btn btn-default btn-md">前往</button>
    </div>	
  </div>
   
   <br>></br>
  
  <div class="row">
    <div class="col-sm-4 text-right">
		<img src="餐廳照片/nola.jpg" width= 80% height= auto>
	</div>	
    <div class="col-sm-7">
	  <h3>Nola</h3>
      <p>斑駁天花板及牆面，再搭配上微弱燈光的吊燈及木製的桌椅，走的是一種頹廢獨特的工業風，卻又身在綠意盎然的校園裡，呈現出著極大的獨特風格。</p>
      <button class="btn btn-default btn-md">前往</button>
    </div>	
  </div>
  
</div>



<!-- 我們的資訊 -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">關於我們</h2>
  <br></br>
  <div class="row">
    <div class="col-sm-4">
      <p>我們是四位熱血爆肝的交大資財學生</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>交大管理二館</p>
      <p><span class="glyphicon glyphicon-user"></span>陳信全</p>
	  <p><span class="glyphicon glyphicon-user"></span>黃楚耘</p>
	  <p><span class="glyphicon glyphicon-user"></span>王語萱</p>
	  <p><span class="glyphicon glyphicon-user"></span>蔡綺真</p>
      <p><span class="glyphicon glyphicon-envelope"></span> CineaT@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d380.74692023722116!2d120.99839904104573!3d24.7853305366457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3468360557031d77%3A0xeea4268da4b4c31b!2z5ZyL56uL5Lqk6YCa5aSn5a246LOH6KiK566h55CG56CU56m25omA!5e0!3m2!1szh-TW!2stw!4v1493293250273" width="700" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
	
  </a>
</footer>
<script src="code.js"></script>

</body>
</html>
