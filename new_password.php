<?php include('resetpasscontrol.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<form class="login-form" action="new_password.php" method="post">
		<h2 class="form-title">New password</h2>
		<!-- form validation messages -->
		<?php include('messages.php'); ?>
		<div class="form-group">
			<label>New password (long 8-25 and required 1 alphabet,1 capital letter,1 number and 1 symbol)</label>
			<input type="password" name="new_pass" id="pass" onkeyup="check();" pattern="(?=.*[$@$!%*?&.;'-_/#^)(?=.*?[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,25}" required title="long 8-25 and required 1 alphabet,1 capital letter,1 number and 1 symbol ">
		</div>
		<div class="form-group">
			<label>Confirm new password (long 8-25 and required 1 alphabet,1 capital letter,1 number and 1 symbol)</label>
			<input type="password" name="new_pass_c" id="cpass" onkeyup="check();" pattern="(?=.*[$@$!%*?&.;'-_/#^)(?=.*?[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,25}" required title="long 8-25 and required 1 alphabet,1 capital letter,1 number and 1 symbol ">
		</div><span id="p"></span>
		<div class="form-group">
			<button type="submit" name="new_password" class="login-btn">Submit</button>
		</div>
	</form>
	<script>
var check=function(){
if(document.getElementById('pass').value == document.getElementById('cpass').value)
{	document.getElementById('p').innerHTML= 'Password & Confirm Password are match';
	document.getElementById('p').style.color= 'green';}
else
{	document.getElementById('p').innerHTML= 'Password & Confirm Password are different';
	document.getElementById('p').style.color= 'red';}}</script>
</body>
</html>