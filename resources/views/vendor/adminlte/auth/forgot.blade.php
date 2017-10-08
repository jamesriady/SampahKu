<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="{{asset("js/jquery.min.js")}}"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="shortcut icon" type="image/png" href="{{asset("imgs/favicon.ico")}}">
  	<link rel="stylesheet" href="{{asset("font-awesome/css/font-awesome.min.css")}}">
  	<link rel="stylesheet" href="{{asset("css/index.css")}}">
  	<link rel="stylesheet" href="{{asset("css/styles.css")}}">
  	<style>
  		.footer{
  			position: absolute;
  		}
  	</style>
</head>
<body>
<center>
<div class="container">
	<div class="row">
		<div class="logo"><h1>LOGO HERE</h1></div>
	</div>
	<div class="row">
		<div class="login"><h2>Password Recovery</h2><hr></div>
	</div>
	<div class="row">
		<div class="content">
		<div class="email"><input type="text" name="email" placeholder="E-mail Address"></div>
		<div class="loginbtn"><input type="submit" name="send" value="send"></div>	
		<div class="forgot"><p>back to<a href="login.blade.php"> login</a> or<a href="register.blade.php"> sign up</a></p></div>
	</div>
	<div class="row">
		<div class="footer col-xs-12 col-sm-12 col-md-12">
			<div class="footerlogo col-xs-12 col-sm-12 col-md-4"><h5>LOGO HERE - Caption here</h5></div>
			<div class="col-md-4"></div>
			<div class="footericon col-xs-12 col-sm-12 col-md-4">
				<h5>FIND US :
					<a href ="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	      			<a href ="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></h5>	
			</div>
			<div class="copy"><p>&copy;2017 LOGOHERE</p></div>
		</div>
	</div>
</div>
</center>
</body>
</html>