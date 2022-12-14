<?php session_start();
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
	
</head>

	<body>
		<div class="Loader"></div>
		<div class="wrapper">  
			
			<!-- Start Navigation -->
			<?php include_once "navbar2.php" ?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- General Detail Start -->
			<section class="dashboard-wrap">
				<div class="container-fluid">
					<div class="row">
					
						<!-- Sidebar Wrap -->
						<div class="col-lg-3 col-md-4">
						<div class="side-dashboard">
								
								<div class="dashboard-avatar">
								
									<!-- <div class="dashboard-avatar-thumb">
										<img src="assets/img/can-2.png" class="img-avater" alt="" />
									</div> -->
									
									<div class="dashboard-avatar-text">
										<h4><?php echo $_SESSION['full_name'] ?></h4>
										<span><?php echo $_SESSION["username"]; ?></span>
									</div>
									
								</div>
								
								<div class="dashboard-menu">
									<ul>
										<li><a href="dashboard.php"><i class="ti-dashboard"></i>Dashboard</a></li>
										<li class="active"><a href="post-job.php"><i class="ti-ruler-pencil"></i>Post Job</a></li>
										<!-- <li><a href="all-jobs.html"><i class="ti-briefcase"></i>All Jobs</a></li>
										<li><a href="applications.html"><i class="ti-user"></i>Applications</a></li>
										<li><a href="packages.html"><i class="ti-wallet"></i>Packages</a></li>
										<li><a href="choose-package.html"><i class="ti-cup"></i>Choose Packages</a></li>
										<li><a href="viewed-resume.html"><i class="ti-flag-alt-2"></i>Viewed Resume</a></li>
										<li><a href="myprofile.html"><i class="ti-id-badge"></i>Edit Profile</a></li>
										<li><a href="login.html"><i class="ti-power-off"></i>Logout</a></li> -->
									</ul>
									<!-- <h4>For Candidate</h4>
									<ul>
										<li><a href="candidate-dashboard.html"><i class="ti-dashboard"></i>Candidate Dashboard</a></li>
										<li><a href="candidate-resume.html"><i class="ti-wallet"></i>My Resume</a></li>
										<li><a href="applied-jobs.html"><i class="ti-hand-point-right"></i>Applied Jobs</a></li>
										<li><a href="saved-jobs.html"><i class="ti-heart"></i>Saved Jobs</a></li>
										<li><a href="alert-jobs.html"><i class="ti-bell"></i>Alert Jobs</a></li>
									</ul> -->
								</div>
							</div>
						</div>
						
						<!-- Content Wrap -->
						<div class="col-lg-9 col-md-8">
							<div class="dashboard-body">
								<div class="dashboard-caption">
									
									<div class="dashboard-caption-header">
										<h4><i class="ti-ruler-pencil"></i>Post Job</h4>
									</div>
									
									<div class="dashboard-caption-wrap">
										<form action="backend/post-job-backend.php" class="post-form" method="POST">
											
											<!-- row -->
											<div class="row">
												<div class="col-md-12 col-sm-12">
													<div class="form-group">
														<label>Job Title*</label>
														<input name="job_title" type="text" class="form-control" placeholder="Enter Title">
													</div>	
												</div>
											</div>
											<!-- <div class="row"> -->
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Salary*</label>
													<input name="salary" type="number" class="form-control" placeholder="Enter Salary">
												<!-- </div>	 -->
												</div>
											</div>
											<!-- <div class="row"> -->
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Industry*</label>
													<input name="industry" type="text" class="form-control" placeholder="Enter Industry">
												<!-- </div>	 -->
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Category*</label>
													<input name="category" type="text" class="form-control" placeholder="Enter Category">
												</div>	
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Job Type*</label>
													<select name="job_type" id="jb-type" class="form-control">
														<option>Job Type</option>
														<!-- <option>Contract</option> -->
														<option>Full-Time</option>
														<option>Part-time</option>
														<!-- <option>Temporary</option> -->
														<option>Freelancer</option>
													</select>
												</div>	
											</div>
											<div class="row">
												<div class="col-md-12 col-sm-12">
													<div class="form-group">
														<label>Address*</label>
														<input name="address" type="text" class="form-control" placeholder="Enter Address">
													</div>	
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>City*</label>
													<input name="city" type="text" class="form-control" placeholder="Enter City">
												<!-- </div>	 -->
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>State*</label>
													<input name="state" type="text" class="form-control" placeholder="Enter State">
												</div>	
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Country*</label>
													<input name="country" type="text" class="form-control" placeholder="Enter Country">
												<!-- </div>	 -->
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Zip Code*</label>
													<input name="zip_code" type="number" class="form-control" placeholder="Enter Zip Code">
												</div>	
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Telephone*</label>
													<input name="telephone" type="text" class="form-control" placeholder="Enter Telephone">
												<!-- </div>	 -->
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Email*</label>
													<input name="email" type="email" class="form-control" placeholder="Enter Email">
												</div>	
											</div>
											<!-- row -->
											<div class="row">
												<div class="col-md-12 col-sm-12">
													<div class="form-group">
														<label>Job Responsibilities*</label>
														<textarea name="job_respon" class="form-control height-120" placeholder="About Company"></textarea>
													</div>	
												</div>
											</div>
											<div class="row">
												<div class="col-md-12 col-sm-12">
													<div class="form-group">
														<label>Skill Requirements*</label>
														<textarea name="skills" class="form-control height-120" placeholder="Job Responsibilities"></textarea>
													</div>	
												</div>
											</div>
											
											<!-- row -->
											
											<!-- row -->
											<div class="row mrg-top-30">
												<div class="col-md-12 col-sm-12">
													<div class="form-group text-center">
														<button type="submit" class="btn-savepreview"><i class="ti-angle-double-right"></i>Publish & Preview</button>
													</div>	
												</div>
											</div>

											
										</form>
									</div>
									
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</section>
			<!-- General Detail End -->
			
			<!-- ============================ Call To Action ================================== -->
			<!-- <section class="theme-bg call-to-act-wrap">
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
			</section> -->
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
										<li><a href="register.html">SignUp Page</a></li>
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
			<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							
							<div class="new-logwrap">
						
								<div class="form-group">
									<label>Username</label>
									<div class="input-with-icon">
										<input type="text" class="form-control" placeholder="Enter Your Username">
										<i class="theme-cl ti-user"></i>
									</div>
								</div>
								
								<div class="form-group">
									<label>Email</label>
									<div class="input-with-icon">
										<input type="email" class="form-control" placeholder="Enter Your Email">
										<i class="theme-cl ti-email"></i>
									</div>
								</div>
								
								<div class="form-group">
									<label>Password</label>
									<div class="input-with-icon">
										<input type="password" class="form-control" placeholder="Enter Your Password">
										<i class="theme-cl ti-lock"></i>
									</div>
								</div>
								
								<div class="form-groups">
									<button type="submit" class="btn btn-primary theme-bg full-width">Register</button>
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
									Don't have an account? <a class="theme-cl" href="register.html">Register</a>
								</div>
								
							</div>
							
						</div>
						</div>
				</div>
			</div>   
			<!-- End Signin Window -->
			
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
			<script type="text/javascript" src="assets/plugins/js/jquery.easy-autocomplete.min.js"></script>
			<!-- Custom Js -->
			<script src="assets/js/custom.js"></script><script type="text/javascript" src="assets/plugins/js/counterup.min.js"></script>
			
			<script type="text/javascript" src="assets/plugins/js/sweetalert.js"></script>
			
			
			<!-- Map -->
			<script src="http://maps.google.com/maps/api/js?key="></script>
			<script src="assets/js/map_infobox.js"></script>
			<script src="assets/js/markerclusterer.js"></script> 
			<script src="assets/js/map.js"></script>
			
			<script src="assets/js/dashboard-custom.js"></script>
			
			<script>
				$('#expirejob').dateDropper();
			</script>
		</div>
	</body>
</html>