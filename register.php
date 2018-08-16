<?php 
  
  session_start();
  include 'connection.php';

  if(isset($_POST['signup']))
  {
  	$username=$_POST['username'];
  	$email=$_POST['email'];
  	$password=$_POST['password'];

  	$sql="INSERT INTO regis(username,email,password)
        VALUES('$username','$email','$password')
  	";
  	if(mysqli_query($conn,$sql))
  	{
  		?>
  		<script>alert('success!!');</script>
  		<?php
  	}
  	else
  	{
  		?>
  		<script>alert('wrong');</script>
  		<?php 
  	}
  }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Register form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="regis-form">

  	<h2>Registration Form</h2>
  		<br><br>
  	<form method="post" action="">
  		<input type="text" name="username" placeholder="username"></br></br>
  		<input type="email" name="email" placeholder="email"></br></br>
  		<input type="password" name="password" placeholder="password"></br></br>
  		<input type="submit" name="signup" value="register"></br></br>
  		<a href="index.php">back</a>
  	</form>
  </div>
</body>
</html>