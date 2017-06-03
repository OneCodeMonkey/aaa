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
		</style>
		<?php 
		include_once 'inc/config.inc.php';
			include_once 'inc/mysql.inc.php';
			include_once 'inc/tool.inc.php';
		?>
	</head>
	<body>	
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12 col-lg-12">
				<!--nav-->
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
					      <a class="navbar-brand" href="#">Brand</a>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav">
					        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
					        <li><a href="#">Link</a></li>
					        <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="#">Action</a></li>
					            <li><a href="#">Another action</a></li>
					            <li><a href="#">Something else here</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="#">Separated link</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="#">One more separated link</a></li>
					          </ul>
					        </li>
					      </ul>
					      <form class="navbar-form navbar-left">
					        <div class="form-group">
					          <input type="text" class="form-control" placeholder="Search">
					        </div>
					        <button type="submit" class="btn btn-default">Submit</button>
					      </form>
					      <ul class="nav navbar-nav navbar-right">
					        <li><a href="#">Link</a></li>
					        <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="#">Action</a></li>
					            <li><a href="#">Another action</a></li>
					            <li><a href="#">Something else here</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="#">Separated link</a></li>
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
			<img class="vcode" src="show_code.php" />

				  <button type="submit" style="margin-left:40%;"class="btn btn-lg btn-info ">Submit</button>
				</form>
			</div>
		</div>
 

        <script type="text/javascript" src="js/vue.js"></script>
		<!-- Vue-->
		<script>
			
		</script>
	
	</body>
</html>