<?php

session_start();

include("dbconfig.php");

if(isset($_POST["login"]))
{
	$email = $_POST["email"];
	$password = $_POST["password"];
	$password = md5($password);
	$sql= "select * from admin WHERE email = '$email' AND password = '$password'";
	$result = mysqli_query($connect,$sql);
	if($row = mysqli_fetch_assoc($result))
	{
		if($row["status"]=="Active"){
		$_SESSION["admin"] = $row["name"];
		if($row["name"]=="Superadmin")
		{
			$_SESSION["superadmin"] = $row["name"];
		}
		mysqli_close($connect);
		header("Location:admin.php");}
		else
	{
		mysqli_close($connect);
		?><script>window.alert("Login Unsuccessful !!! Please try again.");window.location.assign('admin.php?err=loginerr');</script><?php
	}
	}
	
	else
	{
		mysqli_close($connect);
		?><script>window.alert("Login Unsuccessful !!! Please try again.");window.location.assign('admin.php?err=loginerr');</script><?php
	}
}

?>		
