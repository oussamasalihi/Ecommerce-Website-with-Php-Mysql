<?php 

$server = 'http://' . $_SERVER['SERVER_NAME'] . '/ecom/';

// Initialize the session
session_start();


 
// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: login.php");
//     exit;
// }

if(isset($_POST) & !empty($_POST)){
	$p_id = ($_POST['p_id']);
	$p_name = ($_POST['p_name']);
	$u_id = ($_POST['u_id']);
	$u_name = ($_POST['u_name']);
	$quantity = ($_POST['quantity']);
	$phone = ($_POST['phone']);
	$address = ($_POST['address']);

	$CreateSql = "INSERT INTO `orders` (p_id, p_name, u_id, u_name, quantity, u_contact, u_address) VALUES 
    ('$p_id', '$p_name', '$u_id', '$u_name', '$quantity', '$phone', '$address')";
	$res = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
	if($res){
		$smsg = "Order Successful.";
	}else{
		$fmsg = "Order Not Successful. Please try again later.";
	}
}

?>
<!DOCTYPE html>
<html>
<head>


	<!-- Basic -->
	<meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="<?php echo $server;?>img/Logo.png" type="">

      <title>L7Atta Shop</title>
      <!-- bootstrap core css -->
	  <link rel="stylesheet" type="text/css" href="<?php echo $server;?>css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="<?php echo $server;?>css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="<?php echo $server;?>css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="<?php echo $server;?>css/responsive.css" rel="stylesheet" />
</head>
<body>
		<div class="hero_area">
			<!-- header section strats -->
			<header class="header_section">
				<div class="container">
				<nav class="navbar navbar-expand-lg custom_nav-container ">
					<a class="navbar-brand" href="<?php echo $server; ?>index.php"><img width="185" src="<?php echo $server;?>img/Logo.png" alt="#" /></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class=""> </span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['role'] == 'admin') {?>
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="<?php echo $server; ?>components/order/view.php">Orders</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo $server; ?>components/product/view-product.php">Products</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo $server; ?>components/contact/view-contact.php">Contacts</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo $server; ?>components/contact/view-subscribers.php">Subscribers</a>
								</li>
							</ul>
						<?php } else{?>
							<ul class="navbar-nav">
								<li class="nav-item active">
									<a class="nav-link" href="<?php echo $server; ?>index.php">Home <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">More Info <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo $server;?>components/pages/about_us.php">About</a></li>
									<li><a href="<?php echo $server;?>components/pages/testimonial.php">Testimonial</a></li>
									<li><a href="<?php echo $server;?>components/pages/blog.php">Blog</a></li>
								</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo $server;?>components/pages/all_products.php">Products</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo $server;?>components/pages/contact_us.php">Contact</a>
								</li>
								
							</ul>

							<!-- Search With Js >> script.js -->
							<ul class="navbar-nav">
								<div class="d-flex my-2 my-lg-0">
									<input id="searchInput" class="form-control  mr-sm-2" type="search" placeholder="Search" aria-label="Search">
									<button id="searchBtn" class="btn btn-outline-dark m-2 my-sm-0" type="button">
										<i class="fa fa-search" aria-hidden="true"></i>
									</button>
								</div>
							</ul>
						<?php } ?>
						
						<!-- Login -->
						<ul class="navbar-nav">
							<?php 
							if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
								<li class="nav-item mr-sm-2">
									<a class="nav-link btn btn-dark text-white" href="<?php echo $server; ?>logout.php"><span><i class="fa fa-sign-out text-white"></i></span>Sign Out</a>
								</li>
							<?php } else { ?>
								<li class="nav-item mr-sm-2">
									<a class="nav-link btn btn-danger text-white" href="<?php echo $server; ?>logout.php"><span><i class="fa fa-sign-in text-white"></i></span> Sign In</a>
								</li>
							<?php } ?>
						</ul>
						<!-- End Login -->
					</div>
				</nav>
				</div>
			</header>
			<!-- end header section -->

			



	<script src="<?php echo $server;?>js/jquery-3.4.1.min.js"></script>
	<!-- popper js -->
	<script src="<?php echo $server;?>js/popper.min.js"></script>
	<!-- bootstrap js -->
	<script src="<?php echo $server;?>js/bootstrap.js"></script>
	<!-- custom js -->
	<script src="<?php echo $server;?>js/custom.js"></script>

<!-- <div class="container-fluid"> -->
