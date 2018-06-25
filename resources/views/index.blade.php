<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<style type="text/css">
@import url("../../public/css/bootstrap.min.css");
@import url("../../public/css/bootstrap-theme.min.css");
</style>

</head>
<body>
<script type="text/javascript" src="../../public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../../public/js/bootstrap.min.js"></script>

<div id="outer">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
             	<span class="icon-bar"></span>
                <span class="icon-bar"></span>
			</button>
            <a href="index" class="navbar-brand">QuangNguyen4298</a>
        </div>

        <div class="navbar-collapse collapse" id="menu">
            <ul class="nav navbar-nav navbar-right" style="margin-right:10px">             
                <li><a href="index">Home</a></li>
                <li class="dropdown"><a href="#" data-toggle="dropdown">Tin tức <span class="caret"></span> </a>
                	<ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
 					</ul>
                </li>
                <li><a href="login">Đăng nhập</a></li>
                <li><a href="#">Đăng ký</a></li>                
                <li><input class="form-control" type="text" style="margin-top:8px"/></li>
                <li><button class="btn btn-success" style="margin-top:8px; margin-left:8px"><div class="glyphicon glyphicon-search"></div></button></li>
            </ul>
        </div>
    </nav>
</div>	<!--Navbar-->
   
<ul class="container-fluid breadcrumb">
  <li class="active">Home/</li>
</ul>                             	<!--BreadCrumb-->

<div class="container-fluid jumbotron">
	<div class="lead h2 text-center" style=" text-indent:-35px">
    	Vui lòng đăng nhập hoặc đăng kí !
    </div>
      	<div class="col-xs-6 col-xs-offset-4">
            <a href="login.blade.php" button class="btn btn-primary" style="font-size:35px" >Đăng nhập</a>
           
            <button type="button" class="btn btn-success" style="font-size:35px; margin-left:25px; width:210px" >Đăng ký</button>
       	</div> 
</div>

<script>
	
</script>	
</body>
</html>