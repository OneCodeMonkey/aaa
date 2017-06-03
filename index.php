<html>
	<head>
		<meta charset="utf8"/>
		<title>WeDrive,the sharing car leader</title>
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=n9CM1kazCd0mUmbwD25Y6OhZKgtlqteG"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/vue.js"></script>

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
		</style>
		<!-- 点击弹窗 -->
		<script>
			function show_confirm(){
				var r=confirm("Do you Allow us to get your location ?");
				if (r==true)
				  {
				  alert("Congratulations! Your Position has been renewed!");
				  self.location='index.php'; 
				  }
				else
				  {
				  self.location='index.php';
				  }
			}
		</script>
		
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
		<div class="container">
			<div class="row" id="app01">
				<div class="col-xs-5 col-sm-1 col-md-1  col-md-offset-1 col-sm-offset-1 col-xs-offset-1"><button type="button" class="btn btn-info btn-lg">Sharing</button></div>
				<div class="col-xs-5 col-sm-1 col-md-1 col-md-offset-7 col-sm-offset-7 "><button onclick="show_confirm()" type="button" class="btn btn-info btn-lg">Relocation</button></div>
			</div>
		</div>

		<!-- map -->		
		<div class="container-fluid" id="app01">
			<div id="container"></div>
		</div>

		

		<!-- map -->
		<script type="text/javascript"> 
			var map = new BMap.Map("container");          // 创建地图实例  
			var point = new BMap.Point(121.322565,31.201673);  // 创建点坐标  
			map.centerAndZoom(point, 16);                 // 初始化地图，设置中心点坐标和地图级别  
			var marker = new BMap.Marker(point);        // 创建标注    
			map.addOverlay(marker);                     // 将标注添加到地图中

		</script>  		
	
	</body>
</html>