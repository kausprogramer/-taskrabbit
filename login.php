<?php
	session_start();
	if(isset($_SESSION['username']))
	{
		header("location: dashboard.php");
	}
	error_reporting(0);
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Basic Page Needs
	================================================== -->
	<title>Job Stock - Responsive Job Portal Bootstrap Template | ThemezHub</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="assets/plugins/css/plugins.css">
	<link href="assets/css/style.css" rel="stylesheet">
	<style>
		.error{
			margin-top: 5px;
			margin-bottom: 5px;
		}
	</style>
</head>

<body>
	<?php
		// include('backend/login-backend.php');
	?>
	<div class="Loader"></div>
	<div class="wrapper">

		<!-- Start Navigation -->
		<?php include_once "navbar.php" ?>
		<!-- End Navigation -->
		<div class="clearfix"></div>

		<!-- Title Header Start -->
		<section class="inner-header-title" style="background-image:url(http://via.placeholder.com/1920x850);">
			<div class="container">
				<h1>Login</h1>
			</div>
		</section>
		<div class="clearfix"></div>
		<!-- Title Header End -->

		<!-- Tab Section Start -->
		<section class="tab-sec gray">
			<div class="container">
				<div class="col-lg-8 col-md-8 col-sm-12 col-lg-offset-2 col-md-offset-2">
					<div class="new-logwrap">
						<form method="POST" action="backend/login-backend.php">
							<div class="form-group">
								<label>Email</label>
								<div class="input-with-icon">
									<input type="email" class="form-control" placeholder="Enter Your Email" name="email" required>
									<i class="theme-cl ti-email"></i>
								</div>
							</div>

							<div class="form-group">
								<label>Password</label>
								<div class="input-with-icon">
									<input type="password" class="form-control" placeholder="Enter Your Password" name="password" required>
									<i class="theme-cl ti-lock"></i>
								</div>
							</div>
							
							<div class="register-account text-center">
								By hitting the <span class="theme-cl">Login</span> button, you agree to the <a class="theme-cl" href="#">Terms conditions</a> and <a class="theme-cl" href="#">Privacy Policy</a>
							</div>
							<div class="btn btn-danger error disabled full-width" <?php if(!$_GET["email_check"])echo"style='display:none'"?>>
								Email not registered!
							</div>
							<div class="form-groups">
								<button type="submit" class="btn btn-primary theme-bg full-width" name="login">Login</button>
							</div>

							<div class="social-devider">
								<span class="line"></span>
								<span class="circle">Or</span>
							</div>

							<div class="social-login row">

								<div class="col-md-6">
									<a href="#" class="jb-btn-icon social-login-facebook"><i class="fa fa-facebook"></i>Facebook</a>
								</div>

								<div class="col-md-6">
									<a href="#" class="jb-btn-icon social-login-google"><i class="fa fa-google-plus"></i>Google</a>
								</div>

								<div class="col-md-6">
									<a href="#" class="jb-btn-icon social-login-twitter"><i class="fa fa-twitter"></i>Twitter</a>
								</div>

								<div class="col-md-6">
									<a href="#" class="jb-btn-icon social-login-linkedin"><i class="fa fa-linkedin"></i>Linkedin</a>
								</div>

							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- Tab section End -->

		<!-- ============================ Call To Action ================================== -->
		<section class="theme-bg call-to-act-wrap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<div class="call-to-act">
							<div class="call-to-act-head">
								<h3>Want to Become a Success Employers?</h3>
								<span>We'll help you to grow your career and growth.</span>
							</div>
							<a href="#" class="btn btn-call-to-act">SignUp Today</a>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- ============================ Call To Action End ================================== -->

		<!-- ============================ Before Footer ================================== -->
		<div class="before-footer">
			<div class="container">
				<div class="row">

					<div class="col-md-6 col-sm-6">
						<div class="jb4-form-fields">
							<div class="input-group">
								<input type="email" class="form-control" placeholder="Enter your email address">
								<span class="input-group-btn">
									<button class="btn theme-bg" type="submit"><span class="fa fa-paper-plane-o"></span></button>
								</span>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 hill">
						<ul class="job stock-facts">
							<li><span>2744</span></br>Jobs Posted</li>
							<li><span>2365</span></br>Jobs Posted</li>
							<li><span>2021</span></br>Freelancer</li>
							<li><span>7542</span></br>Companies</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		<!-- ============================ Before Footer ================================== -->

		<!-- ============================ Footer Start ================================== -->
		<footer class="dark-footer skin-dark-footer">
			<div>
				<div class="container">
					<div class="row">

						<div class="col-lg-3 col-md-3">
							<div class="footer-widget">
								<img src="assets/img/logo-white.png" class="img-footer" alt="" />
								<div class="footer-add">
									<p>Collins Street West, Victoria,</br> Australia (AU4578).</p>
									<p><strong>Email:</strong></br>hello@jobstock.com</p>
									<p><strong>Call:</strong></br>91 855 742 62548</p>
								</div>

							</div>
						</div>
						<div class="col-lg-2 col-md-2">
							<div class="footer-widget">
								<h4 class="widget-title">Navigations</h4>
								<ul class="footer-menu">
									<li><a href="home-6.html">New Home Design</a></li>
									<li><a href="browse-candidate-list.html">Browse Candidates</a></li>
									<li><a href="browse-employer-list.html">Browse Employers</a></li>
									<li><a href="advance-search-2.html">Advance Search</a></li>
									<li><a href="checkout.html">Job With Map</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-2 col-md-2">
							<div class="footer-widget">
								<h4 class="widget-title">The Highlights</h4>
								<ul class="footer-menu">
									<li><a href="index-2.html">Home Page 2</a></li>
									<li><a href="index-3.html">Home Page 3</a></li>
									<li><a href="index-4.html">Home Page 4</a></li>
									<li><a href="index-5.html">Home Page 5</a></li>
									<li><a href="login.html">LogIn</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-2 col-md-2">
							<div class="footer-widget">
								<h4 class="widget-title">My Account</h4>
								<ul class="footer-menu">
									<li><a href="candidate-dashboard.html">Dashboard</a></li>
									<li><a href="applications.html">Applications</a></li>
									<li><a href="packages.html">Packages</a></li>
									<li><a href="candidate-resume.html">resume.html</a></li>
									<li><a href="register.php">SignUp Page</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-3">
							<div class="footer-widget">
								<h4 class="widget-title">Download Apps</h4>
								<a href="#" class="other-store-link">
									<div class="other-store-app">
										<div class="os-app-icon">
											<i class="ti-android theme-cl"></i>
										</div>
										<div class="os-app-caps">
											Google Play
											<span>Get It Now</span>
										</div>
									</div>
								</a>
								<a href="#" class="other-store-link">
									<div class="other-store-app">
										<div class="os-app-icon">
											<i class="ti-apple theme-cl"></i>
										</div>
										<div class="os-app-caps">
											App Store
											<span>Now it Available</span>
										</div>
									</div>
								</a>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="footer-bottom">
				<div class="container">
					<div class="row align-items-center">

						<div class="col-lg-6 col-md-6">
							<p class="mb-0">?? 2019 Job Stock. Designd By <a href="https://themezhub.com">Themez Hub</a> All Rights Reserved</p>
						</div>

						<div class="col-lg-6 col-md-6 text-right">
							<ul class="footer-bottom-social">
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
								<li><a href="#"><i class="ti-linkedin"></i></a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</footer>
		<!-- ============================ Footer End ================================== -->

		<!-- Signin Window Code -->
		<!-- <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">

						<div class="new-logwrap">
							<form method="POST" action="backend/login-backend.php">
								<div class="form-group">
									<label>Username</label>
									<div class="input-with-icon">
										<input type="text" class="form-control" placeholder="Enter Your Full name" name="full_name" required>
										<i class="theme-cl ti-user"></i>
									</div>
								</div>

								<div class="form-group">
									<label>Email</label>
									<div class="input-with-icon">
										<input type="email" class="form-control" placeholder="Enter Your Email" name="email" required>
										<i class="theme-cl ti-email"></i>
									</div>
								</div>

								<div class="form-group">
									<label>Password</label>
									<div class="input-with-icon">
										<input type="password" class="form-control" placeholder="Enter Your Password" name="password" required>
										<i class=" theme-cl ti-lock"></i>
									</div>
								</div>

								<div class="form-groups">
									<button type="submit" class="btn btn-primary theme-bg full-width" name="login">Login</button>
								</div>

								<div class="forget-account text-center">
									<a class="theme-cl" href="#">Forget Password?</a>
								</div>

								<div class="social-devider">
									<span class="line"></span>
									<span class="circle">Or</span>
								</div>

								<div class="social-login row">

									<div class="col-md-6">
										<a href="#" class="jb-btn-icon social-login-facebook"><i class="fa fa-facebook"></i>Facebook</a>
									</div>

									<div class="col-md-6">
										<a href="#" class="jb-btn-icon social-login-google"><i class="fa fa-google-plus"></i>Google</a>
									</div>

									<div class="col-md-6">
										<a href="#" class="jb-btn-icon social-login-twitter"><i class="fa fa-twitter"></i>Twitter</a>
									</div>

									<div class="col-md-6">
										<a href="#" class="jb-btn-icon social-login-linkedin"><i class="fa fa-linkedin"></i>Linkedin</a>
									</div>

								</div>

								<div class="register-account text-center">
									Don't have an account? <a class="theme-cl" href="register.php">Register</a>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
		End Signin Window -->

		<!-- Scripts
			================================================== -->
		<script type="text/javascript" src="assets/plugins/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/plugins/js/viewportchecker.js"></script>
		<script type="text/javascript" src="assets/plugins/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/plugins/js/bootsnav.js"></script>
		<script type="text/javascript" src="assets/plugins/js/select2.min.js"></script>
		<script type="text/javascript" src="assets/plugins/js/wysihtml5-0.3.0.js"></script>
		<script type="text/javascript" src="assets/plugins/js/bootstrap-wysihtml5.js"></script>
		<script type="text/javascript" src="assets/plugins/js/datedropper.min.js"></script>
		<script type="text/javascript" src="assets/plugins/js/dropzone.js"></script>
		<script type="text/javascript" src="assets/plugins/js/loader.js"></script>
		<script type="text/javascript" src="assets/plugins/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="assets/plugins/js/slick.min.js"></script>
		<script type="text/javascript" src="assets/plugins/js/gmap3.min.js"></script>
		<script type="text/javascript" src="assets/plugins/js/jquery.easy-autocomplete.min.js"></script>
		<!-- Custom Js -->
		<script src="assets/js/custom.js"></script>
		<script type="text/javascript" src="assets/plugins/js/counterup.min.js"></script>

	</div>
</body>

</html>