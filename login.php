<?php
session_start();
include 'connection.php';

$error="";
if(isset($_POST['submit']))
{
	if(empty($_POST['username'])||empty($_POST['password']))
	{
		$error="Both filed requird";
	}
	else
	{
		$username=$_POST['username'];
		$password=$_POST['password'];


		$username=stripcslashes($username);
		$password=stripcslashes($password);
       
       $sql="SELECT username from regis where password='$password'
       ";
       $result=mysqli_query($conn,$sql);
       if(mysqli_num_rows($result)==1)
       {
       	header("location:home.php");
       }
       else
       {
       	$error="incorrect username or password";
       	
       }

	}
}

?>