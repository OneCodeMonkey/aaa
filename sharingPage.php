<html>
	<head>
		<meta charset="utf8"/>
		<title>Sharing Page —— WeDrive,the sharing car leader</title>
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=n9CM1kazCd0mUmbwD25Y6OhZKgtlqteG"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<style type="text/css">  
			html{height:100%}  
			body{height:100%;margin:0px;padding:0px}  
			#container{margin-left:6%;margin-right:6%;margin-top:30px;position:fixed;height:80%;width:88%;}  
			#map{
				/*margin:0px;
				padding:0px;
				width:100%;height:100%;*/
			}	
			#blank{
				height:40px;
			}
			#logo{
				width:100%;
				height:300%;
				position:relative;
				top:-20px;
			}
		</style>

		<!-- 点击弹窗 -->
		<script>
			function show_confirm2(){
				var r=confirm("Are sure to share the Car ?");
				if (r==true)
				  {
				  alert("Congratulations! You can shared your car!");
				  self.location='/12Ride_ROOT/start.php'; 
				  }
				else
				  {
				  alert("You have canceled the sharing! ");
				  self.location='/12Ride_ROOT/index.php';
				  }
			}
			function show_confirm(){
				var r=confirm("Do you Allow us to get your location ?");
				if (r==true)
				  {
				  alert("Congratulations! Your Position has been renewed!");
				  self.location='/12Ride_ROOT/index.php'; 
				  }
				else
				  {
				  self.location='/12Ride_ROOT/index.php';
				  }
			}
		</script>
		<?php 
		include_once '/12Ride_ROOT/inc/config.inc.php';
			include_once '/12Ride_ROOT/inc/mysql.inc.php';
			include_once '/12Ride_ROOT/inc/tool.inc.php';
		?>
	</head>
	<body>	
		<div class="container-fluid">
			<div class="row">
				
				
					<!--nav-->
				<div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">	
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="/index.php"><img id="logo" src="resources/images/Logo.jpg"></a>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav">
					        <li class="active"><a href="#">About <span class="sr-only">(current)</span></a></li>
					        <li><a href="/12Ride_ROOT/start.php">Start</a></li>
					        <li><a href="/12Ride_ROOT/sharingPage.php">Sharing</a></li>
					        <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Detail <span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="#">How to join?</a></li>
					            <li><a href="#">Principles</a></li>
					            <li><a href="#">Sharing rules</a></li>
					          </ul>
					        </li>
					      </ul>
					       <ul class="nav navbar-nav">
					       		<li>&nbsp;</li>
					       		<li>&nbsp;</li>
					       		<li>&nbsp;</li>
					       		<li>&nbsp;</li>
					       		<li>&nbsp;</li>
					       		<li>&nbsp;</li>
					       		<li>&nbsp;</li>
					       </ul>
					      <form class="navbar-form navbar-left col-md-offset-4">
					        <div class="form-group">
					          <input type="text" class="form-control" placeholder="Search">
					        </div>
					        <button type="submit" class="btn btn-default">Submit</button>
					      </form>
					      <ul class="nav navbar-nav navbar-right">
					        <li><a href="" onclick="show_confirm()">Relocate</a></li>
					        <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="#">My Account</a></li>
					            <li><a href="#">Settings</a></li>
					            <li><a href="#">Log out↑</a></li>
				
					          </ul>
					        </li>
					      </ul>
					    </div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
				</div>
			</div>
		</div>
		<!--button-->
		<div id="blank"></div>
		<div class="container">
			<div class="row">
			  <div class="col-xs-9 col-sm-9 col-md-9 col-xs-offset-1 col-sm-offset-1 col-md-offset-1"
				<form>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Your Name</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Name">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Confirm Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Please input the password again">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputFile">Upload your car photo</label>
				    <input type="file" id="exampleInputFile">
				    <p class="help-block">The car photo will help identifying your car.</p>
				  </div>
				  
				  <label>验证码：<input name="vcode" name="vocode" type="text"  /><span>*请输入下方验证码</span></label>
			<img class="vcode" src="/12Ride_ROOT/resources/images/yanzheng.JPG" />
				  <div>&nbsp;</div>
				  
				  <button onclick="show_confirm2()" type="submit" style="display:inline;" class="btn btn-lg btn-info ">Sharing</button>
				</form>
			</div>
		</div>
 

        <script type="text/javascript" src="js/vue.js"></script>
		<!-- Vue-->
		<script>
			
		</script>
	
	</body>
</html>