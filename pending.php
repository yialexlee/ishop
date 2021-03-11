<?php include('resetpasscontrol.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>

	<form class="login-form" action="index.php" method="post" style="text-align: center;">
		<p>
			We have sent an email to  <b><?php echo $_GET['email'] ?></b> to help you recover your account. 
		</p>
	    <p>Please login into your email account and click on the link we sent to reset your password. If you didn't found the email we sended you may check your junk mail.</p>
	</form>
		
</body>
</html>