<?php
 $con = mysqli_connect('localhost', 'root', '', 'fashion_system');
 //Post
 $admin_name = @$_POST['admin_name'];
 $admin_pass = @$_POST['admin_pass'];
 if(isset($_POST['Login'])) {
    if(empty($admin_name) or empty($admin_pass)) {
 		echo '<script> alert("Please inter all information"); </script>';
 	}else{
 		//Get admin information
 		$get_admin = "select * from admin where username = '$admin_name' and password = '$admin_pass'";
 		$run_admin = mysqli_query($con, $get_admin);
 		if(mysqli_num_rows($run_admin) == 1) {
 			$row_admin = mysqli_fetch_array($run_admin);
 			$aname = $row_admin['admin_name'];
 			//SetCookie
 			SetCookie("aname", $aname, time() +60*60*24);
 			SetCookie("adminlogin", 1, time() +60*60*24);
 			header("Location: successful.php");
 		}else{
 			header("Location: failed.php");
 		}
 	}
 }
?> 

<DICOMMENT html>
<html>
 <head>
 	<title>Admin Login</title>
 	<meta charset="UTF-8" />
 	<link rel="stylesheet" type="text/css" href="css/stype.css">
 	<link rel="stylesheet" type="text/css" href="css/fonts.css">
 	<link rel="stylesheet" type="text/css" href="css/animate.css">
 </head>
 <body>
  <div class="Login animated bounceInDown">
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