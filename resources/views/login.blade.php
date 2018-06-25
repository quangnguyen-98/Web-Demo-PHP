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
                <li><a href="#">Đăng nhập</a></li>
                <li><a href="#">Đăng ký</a></li>                
                <li><input class="form-control" type="text" style="margin-top:8px"/></li>
                <li><button class="btn btn-success" style="margin-top:8px; margin-left:8px"><div class="glyphicon glyphicon-search"></div></button></li>
            </ul>
        </div>
    </nav>
</div> <!--Navbar-->

<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
	<div class="col-sm-6 col-sm-offset-3">			
      <form class="form-signin">
        <h2 class="form-signin-heading">Vui lòng đăng nhập.</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" >
        <label for="inputPassword" class="sr-only">Password</label>
        <input style="margin-top:10px" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
 	</div>     
</div><!--Login-Form-->
</body>
</html>