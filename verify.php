<?php

session_start();

include("dbconfig.php");

if(isset($_POST["login"]))
{
	$email = $_POST["email"];
	$password = $_POST["password"];
	$password = md5($password);
	$sql= "select * from member WHERE email = '$email' AND password = '$password'";
	
	$result = mysqli_query($connect,$sql);
	
	if($row = mysqli_fetch_assoc($result))
	{
		if($row["status"]=="Active"){
		$_SESSION["user"] = $row["name"];
		$_SESSION["userid"] = $row["id"];
		mysqli_close($conn);
		header("Location:index.php");}
		else
	{
		mysqli_close($connect);
		?><script>window.alert("Login Unsuccessful !!! Please try again.");window.location.assign('index.php?err=loginerr');</script><?php 
	}
	}
	
	else
	{
		mysqli_close($connect);
		?><script>window.alert("Login Unsuccessful !!! Please try again.");window.location.assign('index.php?err=loginerr');</script><?php 
	}
}

?>		
