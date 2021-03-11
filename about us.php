<?php 
include("dbconfig.php");
include('resetpasscontrol.php');
?>
<!DOCTYPE html>
<html lang="en">

<!-- molla/404.html  22 Nov 2019 10:04:04 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ishop-About Us</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/icon.jpg">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/icon.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/icon.jpg">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/icon.jpg">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<style>
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 99;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #ddd}
.show {display:block;}
</style>
<body>
    <div class="page-wrapper">
        <header class="header">
		<style>
		.header-middle{
		background-image: url("assets/images/backgrounds/bck.jpg");
		background-size: 100% 100%;
		}
		</style>
            <div class="header-top">
                <div class="container">
                    <div class="header-right" style="height:40px">
                        <ul class="top-menu">
                            <li>
<a href="#">Links</a>
                                <ul>
									<li><a href="tel:012-345-6789"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
									<?php if( isset($_SESSION["user"]) && !empty($_SESSION["user"])|| isset($_COOKIE["user"])){?>
									<div class="dropdown">
									<a href="#"><li onclick="myFunction()" class="dropbtn"><i class="icon-user"></i><?php echo $_SESSION["user"];?></li></a>
									<div id="myDropdown" class="dropdown-content" >
									<a href="profile.php">Profile</a>
									<a href="logout.php">Logout</a>
									</div></div>
									<?php }else{ ?>
									<li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
									<?php } ?>
									<script>
									function myFunction() {document.getElementById("myDropdown").classList.toggle("show");}
									window.onclick = function(event) {
									if (!event.target.matches('.dropbtn')) {
									var dropdowns = document.getElementsByClassName("dropdown-content");
									var i;
									for (i = 0; i < dropdowns.length; i++) {
									var openDropdown = dropdowns[i];
									if (openDropdown.classList.contains('show')) {
									openDropdown.classList.remove('show');}}}}
									</script>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
						
                        <a href="index.php" class="logo">
                            <img src="assets/images/demos-img/whi logo.png" alt="Ishop Logo" width="105" height="25">
                        </a>

                                                <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                    <li><a href="category.php" style="color:white">Product</a></li>
									<li><a href="about us.php" style="color:white">About Us</a></li>
									<li><a href="contact us.php" style="color:white">Contact Us</a></li>
							</nav>
							</div>
			
		
                        <div class="header-right">
                        <div class="header-search">
                            <a href=" "class="search-toggle"  style="color:white" role="button" title="Search"><i class="icon-search"></i></a>
                            <form action="search.php" method="post">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
								</div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                        <div class="dropdown cart-dropdown">
                            <a href="cart.php" class="dropdown-toggle" role="button"  aria-haspopup="true" aria-expanded="false" data-display="static" style="color:white">
                                <i class="icon-shopping-cart"></i>
                            </a>

						</div><!-- End .cart -->
                </div><!-- End .header-right -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">About Us</h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content pb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="about-text text-center mt-3">
                                <h2 class="title text-center mb-2">Who We Are</h2><!-- End .title text-center mb-2 -->
                                <p>Ishop is an online business shop. Ishop began its operation in 2020 as a provider of computer accessories to users and small businesses. At first, Ishop will do a business in Malaysia. After we are stable, we will wide to foreign country.</p>
                                <img src="assets/images/about/about-2/signature.png" alt="signature" class="mx-auto mb-5">

                                <img src="assets/images/about/about-2/back.jpg" alt="image" class="mx-auto mb-6">
                            </div><!-- End .about-text -->
                        </div><!-- End .col-lg-10 offset-1 -->
                    </div><!-- End .row -->
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-6">
                            <div class="icon-box icon-box-sm text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-puzzle-piece"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Quality</h3><!-- End .icon-box-title -->
                                    <p>We will guarantee the quality is the best for customers</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-lg-4 col-sm-6 -->

                        <div class="col-lg-4 col-sm-6">
                            <div class="icon-box icon-box-sm text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-life-ring"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Service Support</h3><!-- End .icon-box-title -->
                                    <p>We will make a online support for who face the problem on our service</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-lg-4 col-sm-6 -->

                        <div class="col-lg-4 col-sm-6">
                            <div class="icon-box icon-box-sm text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-heart-o"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Customers</h3><!-- End .icon-box-title -->
                                    <p>We will do the best vision enjoyment and performance of system for our customers</p> 
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-lg-4 col-sm-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
				
				<style>
				.text_target{
					text-align:center;
					font-size: 30px;
				}
				</style>
                <div class="mb-2"></div><!-- End .mb-2 -->
                <div class="bg-image pt-7 pb-5 pt-md-12 pb-md-9" style="background-image: url(assets/images/backgrounds/bg-4.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <div class="count-container text-center">
                                    <div class="count-wrapper text-white">
                                        <span class="count" data-from="0" data-to="10" data-speed="3000" data-refresh-interval="50">0</span>k+
                                    </div><!-- End .count-wrapper -->
                                    <h3 class="count-title text-white">Happy Customer</h3><!-- End .count-title -->
                                </div><!-- End .count-container -->
                            </div><!-- End .col-6 col-md-3 -->

                            <div class="col-6 col-md-3">
                                <div class="count-container text-center">
                                    <div class="count-wrapper text-white">
                                        <span class="count" data-from="0" data-to="1" data-speed="3000" data-refresh-interval="50">0</span>+
                                    </div><!-- End .count-wrapper -->
                                    <h3 class="count-title text-white">Years in Business</h3><!-- End .count-title -->
                                </div><!-- End .count-container -->
                            </div><!-- End .col-6 col-md-3 -->

                            <div class="col-6 col-md-3">
                                <div class="count-container text-center">
                                    <div class="count-wrapper text-white">
                                        <span class="count" data-from="0" data-to="5" data-speed="3000" data-refresh-interval="50">0</span>%
                                    </div><!-- End .count-wrapper -->
                                    <h3 class="count-title text-white">Return Clients</h3><!-- End .count-title -->
                                </div><!-- End .count-container -->
                            </div><!-- End .col-6 col-md-3 -->

                            <div class="col-6 col-md-3">
                                <div class="count-container text-center">
                                    <div class="count-wrapper text-white">
                                        <span class="count" data-from="0" data-to="0" data-speed="3000" data-refresh-interval="50">0</span>
                                    </div><!-- End .count-wrapper -->
                                    <h3 class="count-title text-white">Awards Won</h3><!-- End .count-title -->
                                </div><!-- End .count-container -->
                            </div><!-- End .col-6 col-md-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .bg-image pt-8 pb-8 -->

                <div class="bg-light-2 pt-6 pb-7 mb-6">
                    <div class="container">
                        <h2 class="title text-center mb-4">Meet Our Team</h2><!-- End .title text-center mb-2 -->

                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="member member-2 text-center">
                                    <div class="member-content">
                                        <h3 class="member-title">Teo Jun Xiang</h3><!-- End .member-title -->
                                    </div><!-- End .member-content -->
                                </div><!-- End .member -->
                            </div><!-- End .col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="member member-2 text-center">
                                    <div class="member-content">
                                        <h3 class="member-title">Ong Yaw Xiang</h3><!-- End .member-title -->
                                    </div><!-- End .member-content -->
                                </div><!-- End .member -->
                            </div><!-- End .col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="member member-2 text-center">
                                    <div class="member-content">
                                        <h3 class="member-title">Lee Jia Yi</h3><!-- End .member-title -->
                                    </div><!-- End .member-content -->
                                </div><!-- End .member -->
                            </div><!-- End .col-lg-3 -->
                        </div><!-- End .text-center -->
                    </div><!-- End .container -->
                </div><!-- End .bg-light-2 pt-6 pb-6 -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
<footer class="footer">
		<style>
		.footer-middle{
		background-image: url("assets/images/backgrounds/bck.jpg");
		background-size: 100% 100%;
		}
		</style>
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget widget-about">
	            				<img src="assets/images/demos-img/whi logo.png" class="footer-logo" alt="Footer Logo" width="105" height="25">
	            				
	            				<div class="social-icons">
                                    <a href="https://www.facebook.com/sharer.php?u=ishop.io.my" class="social-icon" target="_blank" style="color:white" title="Facebook"><i class="icon-facebook-f"></i></a>
                                    <a href="https://twitter.com/home?status=ishop.io.my" class="social-icon" target="_blank" style="color:white" title="Twitter"><i class="icon-twitter"></i></a>
                                </div><!-- End .soial-icons -->
	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title" style="color:white">Useful Links</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="about us.php" style="color:white">About Ishop</a></li>
	            					<li><a href="contact us.php" style="color:white">Contact us</a></li>
									<li><a href="faq.php" style="color:white">Help</a></li>
									<li><a href="coming-soon.php" style="color:white">Coming Soon</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title" style="color:white">My Account</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
									<li><a href="profile.php" style="color:white">Profile</a></li>
	            					<li><a href="cart.php" style="color:white">View Cart</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container">
	        		<p class="footer-copyright">Copyright © 2020 Ishop Store. All Rights Reserved.</p><!-- End .footer-copyright -->
	        		<figure class="footer-payments">
	        			<img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
	        		</figure><!-- End .footer-payments -->
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>
	
	<!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="verify.php" method="POST">
                                        <div class="form-group">
                                            <label for="singin-email">Email address </label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password (long 8-25 and required 1 alphabet,1 capital letter,1 number and 1 symbol)</label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" name="login" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="enter_email.php" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="register-email">Email address </label>
                                            <input type="email" class="form-control" id="register-email" name="email" required>
                                        </div><!-- End .form-group -->
										 <div class="form-group">
                                            <label for="register-email">Name </label>
                                            <input type="text" class="form-control" id="register-email" name="name" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-password">Password *(long 8-25 and required 1 alphabet,1 capital letter,1 number and 1 symbol)</label>
                                            <input type="password" class="form-control" id="pass" onkeyup="check();"  name="password" pattern="(?=.*[$@$!%*?&.;'-_/#^)(?=.*?[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,25}" required title="long 8-25 and required 1 alphabet,1 capital letter,1 number and 1 symbol " >
                                        </div><!-- End .form-group -->
										<div class="form-group">
                                            <label for="register-password">Confirm Password *(long 8-25 and required 1 alphabet,1 capital letter,1 number and 1 symbol)</label>
                                            <input type="password" class="form-control" id="cpass" onkeyup="check();"  name="cpass" required>
											
                                        </div><!-- End .form-group --><span id="p"></span>
										<div class="g-recaptcha" data-sitekey="6LeZW9kUAAAAACANnLsFHNQ3xEyez1k5H4ZKBaFZ"></div>
                                        <div class="form-footer">
										
                                            <button type="submit" class="btn btn-outline-primary-2" name="register">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" name="agree" value="check" checked="checked" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
									<script>
var check=function(){
if(document.getElementById('pass').value == document.getElementById('cpass').value)
{	document.getElementById('p').innerHTML= 'Password & Confirm Password are match';
	document.getElementById('p').style.color= 'green';}
else
{	document.getElementById('p').innerHTML= 'Password & Confirm Password are different';
	document.getElementById('p').style.color= 'red';}}</script>
<?php
if (isset($_POST["register"]))
{	$email=$_POST["email"];
	$name=$_POST["name"];
	$p=$_POST["password"];
	$pass=$_POST["cpass"];
	$passmd5=md5($pass);
	$agree=$_POST["agree"];
	$status="Active";
	$secretkey="6LeZW9kUAAAAAA1zGXvzI92zqIYOoYXyrW_76Cn1";
	$responseKey=$_POST['g-recaptcha-response'];
	$userIP=$_SERVER['REMOTE_ADDR'];
	$url="https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$responseKey&remoteip=$userIP";
	$response=file_get_contents($url);
	$response = json_decode($response);
	$sqlcheck= "select * from member WHERE email = '$email'";
	$resultcheck = mysqli_query($connect,$sqlcheck);
	echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
	echo '<center><h1 style=" margin-top:2%; font-family:Arial;">Identifying...</h1><i class="fa fa-refresh fa-spin" style="font-size:50px; "></i></center>';
	if($response->success){
	if($p==$pass){
	$sql = "Insert INTO member(email,password,name,status)VALUES('$email','$passmd5','$name','$status')";
	if(mysqli_fetch_assoc($resultcheck)==0){
	if(mysqli_query($connect, $sql)) {
		$_SESSION["user"] = $row["name"];
			?><script>window.alert("Create account successfully !!!.");window.location.assign('index.php');</script><?php
	}}else{?><script>window.alert("This Email Already Existed !!! Please login.");window.location.assign('index.php?err=signup');</script><?php }
		mysqli_close($connect);
	 }
	else{?><script>window.alert("Please make sure the confirm password & password are match and completed the reCAPTCHA!!!");window.location.assign="index.php?err=signup"; </script><?php}}
	else{?><script>window.alert("Please complete the reCAPTCHA !!!");window.location.assign="index.php?err=signup"; </script> <?php }}} ?> 

                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>
</html>
