<DICOMMENT html>
<html>
 <head>
 	<title>Admin Login</title>
 	<meta charset="UTF-8" />
 	<link rel="stylesheet" type="text/css" href="css/stype.css">
 	<link rel="stylesheet" type="text/css" href="css/fonts.css">
 	<link rel="stylesheet" type="text/css" href="css/animate.css">
  <meta http-equiv="refresh" content="2; url='index.php'" />
 </head>
 <body>
 <div class="Successful animated bounceInDown">Login is successful!</div>
  <div class="Login animated bounceInUp">
  	<form action="login.php" method="post">
  	    <center>
  	     <div class="Circle"></div>
  		 <input type="text" name="admin_name" placeholder="Username"/> <br/>
  		 <input type="password" name="admin_pass" placeholder="Password"/> <br/>
  		 <input type="submit" name="Login" value="Login"/> <br/>
  		</center>
  	</form>
  </div>
 </body>
</html>