<?php 
include("dbconfig.php");
session_start();
if( isset($_SESSION["admin"]) && !empty($_SESSION["admin"])|| isset($_COOKIE["admin"]))
{ }
else {header("Location: admin.php");}
?>
<!DOCTYPE html>
<html lang="en">


<!-- molla/about-2.html  22 Nov 2019 10:03:54 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ishop-Edit Product</title>
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
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width:1220px;
}

.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

.tab button:hover {
  background-color: #ddd;
}

.tab button.active {
  background-color: #ccc;
}

.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
  width:1220px;
}
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
                                    <?php if( isset($_SESSION["admin"]) && !empty($_SESSION["admin"])|| isset($_COOKIE["admin"])){?>
									<li></li>
									<div class="dropdown">
									<a href="#"><li onclick="myFunction()" class="dropbtn"><i class="icon-user"></i><?php echo $_SESSION["admin"];?></li></a>
									<div id="myDropdown" class="dropdown-content" >
									<a href="logoutadmin.php">Logout</a>
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
                        <a href="admin.php" class="logo">
                            <img src="assets/images/demos-img/whi logo.png" alt="Ishop Logo" width="105" height="25">
                        </a>

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                
                                   <?php if( isset($_SESSION["admin"]) && !empty($_SESSION["admin"])|| isset($_COOKIE["admin"])){?>
                                   <li><a href="orderlist.php" style="color:white">Order List</a></li>
									<li><a href="productlist.php" style="color:white">Product List</a></li>
									<li><a href="memberlist.php" style="color:white">Member List</a></li>
									<?php } if( isset($_SESSION["superadmin"]) && !empty($_SESSION["superadmin"])|| isset($_COOKIE["superadmin"])){?>
									<li><a href="adminlist.php" style="color:white">Admin List</a></li>
									<?php }if( isset($_SESSION["admin"]) && !empty($_SESSION["admin"])|| isset($_COOKIE["admin"])){?>
									<li><a href="contactlist.php" style="color:white">Contact List</a></li>
									<li><a href="index.php" style="color:white">Client Site</a></li><?php } ?>
							</nav>
							</div>
			
		
                    <div class="header-right">
                        <div class="header-search">
                            <a href=" "class="search-toggle"  style="color:white" role="button" title="Search"><i class="icon-search"></i></a>
                            <form action="adminsearch.php" method="post">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
								</div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
						
                </div><!-- End .header-right -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->
		<main class="main">
		<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Edit Product</h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
`		<h2 class="title text-center mb-2">Product Details</h2><!-- End .title text-center mb-2 -->
        <div style="padding-left:200px;padding-right:200px;padding-bottom:80px;padding-top:30px;">
		<?php
if(isset($_GET["pid"]))
{
	$pid = $_GET["pid"];
	$sqls = "SELECT * FROM product where Product_ID = '$pid'";
	$result = mysqli_query($connect, $sqls);
	$row = mysqli_fetch_array($result);
	$sqlss = "Select * from category INNER JOIN product ON category.Product_code=product.Product_Code where product.Product_ID = '$pid'";
	$results = mysqli_query($connect, $sqlss);
	$rows = mysqli_fetch_array($results);
	$sqlsss = "Select * from brand INNER JOIN product ON brand.Product_code=product.Product_Code where product.Product_ID = '$pid'";
	$resultss = mysqli_query($connect, $sqlsss);
	$rowss = mysqli_fetch_array($resultss);
}

?>
		<form action="#" method="POST">
										<div class="form-group">
                                            <label ><strong>Product Code</strong></label>
                                            <input type="text" class="form-control" value="<?php echo $row["Product_Code"] ?>" name="code" required>
                                        </div>
                                        <div class="form-group">
                                            <label ><strong>Product Name </strong></label>
                                            <input type="text" class="form-control"  name="name" value="<?php echo $row["Product_NAME"] ?>" required>
                                        </div>
										<div class="form-group">
                                            <label ><strong>Product Description</strong></label>
                                            <textarea rows="5" name="description" class="form-control"><?php echo $row["Product_DESCRIPTION"] ?></textarea>
                                        </div>
										<div class="form-group">
                                            <label ><strong>Product Picture </strong></label><br>
                                            <input type="file" accept=".png,.jpg,.jpeg" name="pic"  required>
                                        </div>
										<div class="form-group">
                                            <label ><strong>Product Category </strong></label><br>
											<?php $selected = $rows['Category_NAME'];?>
                                            <select name="category" style="width:130px;height:38px;border-radius:6px;">
											<option <?php if($selected == "Mouse"){echo("selected");}?> value="Mouse">Mouse</option>
											<option <?php if($selected == "Keyboard"){echo("selected");}?> value="Keyboard">Keyboard</option>
											<option <?php if($selected == "Headphone"){echo("selected");}?> value="Headphone">Headphone</option>
											<option <?php if($selected == "Flash Drive"){echo("selected");}?> value="Pendrive">Flash Drive</option>
											<option <?php if($selected == "Speaker"){echo("selected");}?> value="Speaker">Speaker</option>
											<option <?php if($selected == "Microphone"){echo("selected");}?> value="Microphone">Microphone</option>
											<option <?php if($selected == "Webcam"){echo("selected");}?> value="Webcam">Webcam</option>
											<option <?php if($selected == "Display Adapter"){echo("selected");}?> value="Display Adapter">Display Adapter</option>
											</select>
                                        </div>
										<div class="form-group">
                                            <label ><strong>Product Brand </strong></label><br>
											<?php $selected = $rowss['Brand_NAME'];?>
                                            <select name="brand" style="width:130px;height:38px;border-radius:6px;">
											<option <?php if($selected == "Logitech"){echo("selected");}?> value="Logitech">Logitech</option>
											<option <?php if($selected == "Sony"){echo("selected");}?> value="Sony">Sony</option>
											<option <?php if($selected == "Philips"){echo("selected");}?> value="Philips">Philips</option>
											<option <?php if($selected == "Kingstom"){echo("selected");}?> value="Pendrive">Kingstom</option>
											<option <?php if($selected == "Beats"){echo("selected");}?> value="Beats">Beats</option>
											<option <?php if($selected == "Tonor"){echo("selected");}?> value="Tonor">Tonor</option>
											<option <?php if($selected == "Microsoft"){echo("selected");}?> value="Microsoft">Microsoft</option>
											</select>
                                        </div>
										<div class="form-group">
                                            <label ><strong>Product Status </strong></label><br>
											<?php $selected = $row['Product_Status'];?>
                                            <select name="status" style="width:130px;height:38px;border-radius:6px;">
											<option <?php if($selected == "Available"){echo("selected");}?> value="Available">Available</option>
											<option <?php if($selected == "Unavailable"){echo("selected");}?> value="Unavailable">Unavailable</option>
											</select>
                                        </div>
										<div class="form-group">
                                            <label ><strong>Product Connectivity</strong></label>
                                            <input type="text" class="form-control" value="<?php echo $row["Product_Connectivity"] ?>" name="connectivity" required>
                                        </div>
										<div class="form-group">
                                            <label ><strong>Product Price</strong></label>
                                            <input type="number" class="form-control" min="1" value="<?php echo $row["Product_PRICE"] ?>" name="price" required>
                                        </div>
										<div class="form-group">
                                            <label ><strong>Product Stock</strong></label>
                                            <input type="number" class="form-control" min="1" value="<?php echo $row["Product_STOCK"] ?>" name="stock" required>
                                        </div>
                                        <div class="form-footer">
                                            <button type="submit" name="submit" class="btn btn-outline-primary-2">
                                                <span>Submit</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            
                                            
                                        </div><!-- End .form-footer -->
                                    </form></div>
<?php
if(isset($_POST["submit"])){
$code=$_POST["code"];
$name=$_POST["name"];
$description=$_POST["description"];
$pic=$_POST['pic'];
$category=$_POST["category"];
$brand=$_POST["brand"];
$status=$_POST["status"];
$connectivity=$_POST["connectivity"];
$price=$_POST["price"];
$stock=$_POST["stock"];
$sql= "Update product set Product_Code='$code',Product_Connectivity='$connectivity',Product_Status='$status',Product_NAME='$name',Product_DESCRIPTION='$description',Product_PIC='$pic',Product_PRICE='$price',Product_STOCK='$stock' where Product_ID='$pid' ";
$sqlc= "UPDATE category INNER JOIN product ON category.Product_code=product.Product_Code SET category.Category_NAME='$category',category.Product_code='$code' WHERE product.Product_ID='$pid'";
$sqlb= "Update brand INNER JOIN product ON brand.Product_code=product.Product_Code set brand.Brand_NAME='$brand',brand.Product_code='$code' where product.Product_ID = '$pid' ";
if(mysqli_query($connect,$sql)&&mysqli_query($connect,$sqlc)&&mysqli_query($connect,$sqlb)){mysqli_close($connect);echo "<script> window.location.assign('productlist.php'); </script>";}}?>
          
		  </main>

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
								<?php if( isset($_SESSION["admin"])=="superadmin" && !empty($_SESSION["user"])|| isset($_COOKIE["admin"])=="superadmin"){?>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li><?php }?>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="verifyadmin.php" method="POST">
                                        <div class="form-group">
                                            <label for="singin-email">Email address </label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password </label>
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

                                            
                                        </div><!-- End .form-footer -->
                                    </form>
                                   
                                </div><!-- .End .tab-pane -->
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


<!-- molla/404.html  22 Nov 2019 10:04:04 GMT -->
</html>
