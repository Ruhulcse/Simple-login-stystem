<?php
 include 'login.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Login form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="login-form">
  	<h2>PHP Login Form</h2>
  </br></br>
  <form method="post" action="">
  	<input type="text" name="username" placeholder="username"/></br></br>
  	<input type="password" name="password" placeholder="password"/></br></br>
  	<input type="submit" name="submit"value="login"/></br></br>
  	 <?php
  	   echo $error;
  	 ?>
  	 <br>
      Not Register?
  	<a href="register.php">signup here</a>
  </form>
  </div>
</body>
</html>