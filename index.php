<?php require_once ('connect.php')?>

<?php require('templates/header.php')?>

	<!-- Welcome -->
		<div class="heading_container heading_center mt-2 mb-4">
			<h2>Welcome,
				<b><?php // check user login and output username
				if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
					echo $_SESSION['username'] . "!";
				} else {
					echo "Guest !";
				}
				?></b> 	
			</h2>
		</div>
	<!-- End Welcome -->

	<!-- Interface for Only Clients -->
	<?php if (!$_SESSION['loggedin'] == true || $_SESSION['role'] == 'buyer') {?>			
		<!-- slider section -->
			<section class="slider_section ">
				<div class="slider_bg_box">
					<img src="img/slider-bg.jpg" alt="">
				</div>
				<div id="customCarousel1" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="container ">
								<div class="row">
									<div class="col-md-7 col-lg-6 ">
										<div class="detail-box">
											<h1>
											<span>
											Sale 20% Off
											</span>
											<br>
											On Everything
											</h1>
											<div class="btn-box">
											<a href="#products" class="btn1">
											Shop Now
											</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item ">
							<div class="container ">
							<div class="row">
								<div class="col-md-7 col-lg-6 ">
									<div class="detail-box">
										<h1>
										<span>
										Just in! March
										</span>
										<br>
										New arrivals.
										</h1>
										<div class="btn-box">
										<a href="#products" class="btn1">
										Shop Now
										</a>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
					<div class="container">
						<ol class="carousel-indicators">
							<li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
							<li data-target="#customCarousel1" data-slide-to="1"></li>
							<!-- <li data-target="#customCarousel1" data-slide-to="2"></li> -->
						</ol>
					</div>
				</div>
			</section>
		<!-- end slider section -->

		
		<!-- Product View -->
			<!-- H2 -->
			<div id="products" class="heading_container heading_center mt-4">
				<h2>
					Our <span>products</span>
				</h2>
			</div>

			<div class="d-flex my-2">
				<!-- output success or failed message. -->
				<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
				<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
			</div>

			<div class="row main-section">
			<?php 
				$SelSql = "SELECT * FROM `products`";
				$res = mysqli_query($connection, $SelSql);
				$num_of_rows = mysqli_num_rows($res);
				if ($num_of_rows > 0) {
					// output data of each row
					while($num_of_rows > 0) {
						$num_of_rows--;
						$r = mysqli_fetch_assoc($res);
						include('templates/product.php');
					}
				} else {
					echo "No Products";
				}
			?>
			</div>
		<!-- End Product -->
			
			
		<!-- subscribe section -->
			<section class="subscribe_section">
				<div class="container-fuild">
					<div class="box">
					<div class="row">
						<div class="col-md-6 offset-md-3">
							<div class="subscribe_form ">
								<div class="heading_container heading_center">
								<h3>Subscribe To Get Discount Offers</h3>
								</div>
								<p>When You Join Our Mailing List</p>
								<form action="<?php echo $_SERVER["PHP_SELF"];?>"method="post">
									<input type="email" placeholder="Enter your email" name="email">
									<button type="submit" name="submit">
									subscribe
									</button>
								</form>
							</div>
						</div>
					</div>
					</div>
				</div>
			</section>
		<!-- End subscribe section -->

				
		<!-- Footer -->
		<?php require('templates/footer.php') ?>

	<?php } ?>