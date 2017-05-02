<?php 
require_once ('config.php');
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
  <link rel="stylesheet" href="jquery/jRating.jquery.css" type="text/css" />

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
		<li><a href="regist.php"><span class="glyphicon glyphicon-plus"></span> 註冊</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> 登入</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>*山房</h1> 
</div>

<!-- 店家資訊---->
<div id="about" class="container-fluid">
  <div class="row">

	<div class="col-xs-6">
		<img src="店家資訊/山房/1.jpg" width=600px height=auto>
	</div>
	<div class="col-xs-6">
	  <h1>山房</h1>
	  <h3>地址：新竹市東南街245號</h3>
	  <h3>電話：03-5720177</h3>
	  <h3>營業時間：08:30~16:30</h3>
	  <iframe src="http://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q=Mountain House 山房早午餐&z=16&output=embed&t=" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>	
  </div>
</div>
	
	<ul class="nav nav-tabs">
        <li><a data-toggle="tab" href="#info">店家介紹</a></li>
        <li><a data-toggle="tab" href="#menu">菜單</a></li>
        <li><a data-toggle="tab" href="#article">網友文章</a></li>
    </ul>
        
    <div class="tab-content">
        <div id="info" class="tab-pane fade in active">
            <h3>店家介紹</h3>
			   <font size="5" face="標楷體">
			   <p>山房沒有繁複的設計和特定的風格，是一間小小溫馨的店家，是帶給大家早午餐的好地方。而且大部分都以手工自製的食材提供給客人，給人自然的好味道。相信山房這間小店，會逐漸地在大家的心理擁有不可取代性。</p>
		       </font>
			   <center>
			   <img src="店家資訊/山房/2.jpg" width= 50% height= auto>
			   </center>
			   <br></br>
			   <center>
			   <img src="店家資訊/山房/3.jpg" width= 50% height= auto>
			   </center>
			   <br></br>
			   <center>
			   <img src="店家資訊/山房/4.jpg" width= 50% height= auto>
			   </center>
			   <br></br>
		       
	        
        </div>
        <div id="menu" class="tab-pane fade">
            <h3>菜單</h3>
			<center>
			<img src="店家資訊/山房/目錄.jpg" width= 50% height= auto>
			</center>
        </div>
        <div id="article" class="tab-pane fade">
            <h3>網友文章</h3>
			<a href="http://qaz8229.pixnet.net/blog/post/319536759-%E5%90%83%E6%96%B0%E7%AB%B9%EF%BD%9C%E6%9D%B1%E5%8D%97%E8%A1%97%E3%80%8Emountain-house%E5%B1%B1%E6%88%BF%E3%80%8F%E4%BA%BA%E6%B0%A3%E7%A0%B4%E8%A1%A8">吃新竹｜東南街『mountain-house山房』人氣破表by菇菇。Eat all day</a>
			<br></br>
			<iframe width="1200" height="315" src="http://qaz8229.pixnet.net/blog/post/319536759-%E5%90%83%E6%96%B0%E7%AB%B9%EF%BD%9C%E6%9D%B1%E5%8D%97%E8%A1%97%E3%80%8Emountain-house%E5%B1%B1%E6%88%BF%E3%80%8F%E4%BA%BA%E6%B0%A3%E7%A0%B4%E8%A1%A8">
			</iframe>
        </div>
    </div>
<!-- 評分功能-->
<style type="text/css">
body {
margin: 15px;
font-family: Arial;
font-size: 13px
}
a img {
border: 0
}
.datasSent, .serverResponse {
margin-top: 20px;
width: 470px;
height: 73px;
border: 1px solid #F0F0F0;
background-color: #F8F8F8;
padding: 10px;
float: left;
margin-right: 10px
}
.datasSent {
width: 200px;
position: fixed;
left: 680px;
top: 0
}
.serverResponse {
position: fixed;
left: 680px;
top: 100px
}
.datasSent p, .serverResponse p {
font-style: italic;
font-size: 12px
}
.exemple {
margin-top: 15px;
}
.clr {
clear: both
}
pre {
margin: 0;
padding: 0
}
.notice {
background-color: #F4F4F4;
color: #666;
border: 1px solid #CECECE;
padding: 10px;
font-weight: bold;
width: 600px;
font-size: 12px;
margin-top: 10px
}
</style>
<hr style='background:red' size=10 width='50%'  align=left>
<div class="rating" id="container">
<div id="comment" style="background-color:#FFFFFF;height:400px;width:35%;float:left;">
<h2>滿意度評分</h2>
<div class="basic" data-average="12" data-id="1"></div>

<script type="text/javascript" src="jquery/jquery.js"></script> 
<script type="text/javascript" src="jquery/jRating.jquery.js"></script> 
<script type="text/javascript">
		$(document).ready(function(){
			$('.basic').jRating();
			
			$('.exemple2').jRating({
				type:'small',
				length : 40,
				decimalLength : 1,
			});
			
			$('.exemple3').jRating({
				step:true,
				length : 20 
			});
			
			$('.exemple4').jRating({
				isDisabled : true
			});
			
			$('.exemple5').jRating({
				length:10,
				decimalLength:1,
				onSuccess : function(){
					alert('Success : your rate has been saved :)');
				},
				onError : function(){
					alert('Error : please retry');
				}
			});
			
			$(".exemple6").jRating({
			  length:10,
			  decimalLength:1,
			  showRateInfo:false
			});
			
			$('.exemple7').jRating({
				step:true,
				length : 20,
				canRateAgain : true,
				nbRates : 3
			});
		});
	</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<br></br>
<textarea cols="50" rows="5" placeholder="說說你的想法吧" name="comment" form="username"></textarea>
<form method="post" action="store_info_f.php" id="username">
</br>
<input type="submit" name="COMMENT" value="送出評論" class="btn btn-success btn-md centered"/>
</form>
<br/> 
</div>
<div id="content" style="background-color:#FFFFFF;height:100px;width:65%;float:left;">
<div style="overflow-x:scroll;height:300px;weight:200px">

        <h3><?php $sql = "SELECT username,comment FROM comment";
		$result = $config->query($sql);
		if(!($row = $result->fetch(PDO::FETCH_ASSOC))){echo"嘿嘿 目前沒有評論唷 A_A!!!";}
		else{
			$sql = "SELECT username,comment FROM comment";
			$result = $config->query($sql);
			while($row = $result->fetch(PDO::FETCH_ASSOC))
			{
				echo "$row[comment]".'<br><br>';
			}
		}
		
		?></h3>

		
</div>
</div>
</div>
</body>

</html>