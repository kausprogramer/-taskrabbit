<?php
session_start();
include_once "config.php";
error_reporting(0);
$id = $_GET['id'];
$sql = "SELECT * FROM jobs WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
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
			
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(http://via.placeholder.com/1920x850);">
				<div class="container">
					<h1 style="margin-bottom:70px;margin-top:0px;">Job Detail</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Candidate Detail Start -->
			<section class="detail-desc">
				<div class="container">
				
					<div class="ur-detail-wrap top-lay">
						
						<div class="ur-detail-box">
							
							<div class="ur-thumb">
								<img src="assets/img/com-1.jpg" class="img-responsive" alt="" />
							</div>
							<div class="ur-caption">
								<h4 class="ur-title"><?=$row["job_title"]?></h4>
								<p class="ur-location"><i class="ti-location-pin mrg-r-5"></i><?=$row["address"] ?></p>
								<!-- <span class="ur-designation"><i class="ti-home mrg-r-5"></i>Doodle Infotech</span> -->
							</div>
							
						</div>
						
						<div class="ur-detail-btn">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="btn btn-warning mrg-bot-10 full-width"><i class="ti-star mrg-r-5"></i>Apply This Job</a><br>
							<a href="#" class="btn btn-info full-width"><i class="ti-linkedin mrg-r-5"></i>Apply With Linkedin</a>
						</div>
						
					</div>
					
				</div>
			</section>
			
			<!-- Job full detail Start -->
			<section class="full-detail-description full-detail">
				<div class="container">
					<!-- Job Description -->
					<div class="col-md-8 col-sm-12">
						<div class="full-card">
						
							<div class="row row-bottom mrg-0">
								<h2 class="detail-title">Job Detail</h2>
								<ul class="job-detail-des">
									<li><span>Salary:</span>$<?=$row["salary"] ?></li>
									<li><span>Industry:</span><?=$row["industry"] ?></li>
									<li><span>Category:</span><?=$row["category"] ?></li>
									<li><span>Job Type:</span><?=$row["job_type"] ?></li>
								</ul>
							</div>
							
							<div class="row row-bottom mrg-0">
								<h2 class="detail-title">Location</h2>
								<ul class="job-detail-des">
									<li><span>Address:</span><?=$row["address"] ?></li>
									<li><span>City:</span><?=$row["city"] ?></li>
									<li><span>State:</span><?=$row["state"] ?></li>
									<li><span>Country:</span><?=$row["country"] ?></li>
									<li><span>Zip:</span><?=$row["zip_code"] ?></li>
									<li><span>Telephone:</span><?=$row["telephone"] ?></li>
									<li><span>Email:</span><?=$row["email"] ?></li>
								</ul>
							</div>
							
							<div class="row row-bottom mrg-0">
								<h2 class="detail-title">Job Responsibilities</h2>
								<p><?=$row["job_responsibilities"] ?></p>	
							</div>
							
							<div class="row row-bottom mrg-0">
							<h2 class="detail-title">Skill Requirement</h2>
							<p><?=$row["skill_requirments"] ?></p>
							<!-- <ul class="detail-list">
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</li>
							</ul> -->
							</div>
							
							<!-- <div class="row row-bottom mrg-0">
								<h2 class="detail-title">Map Location</h2>
								<div id="map_full_width_one" class="full-width" style="height:400px;"></div>
							</div> -->
			
						</div>
							
					</div>
					<!-- End Job Description -->
					
					<!-- Start Sidebar -->
					<div class="col-md-4 col-sm-12">
						<div class="sidebar right-sidebar">
							<!-- Job Alert -->
							<a href="javascript:void(0)" class="btn btn-info full-width mrg-bot-20" data-toggle="modal" data-target="#job-alert">Get Job Alert!</a>
							<!-- /Job Alert -->
							
							<div class="side-widget">
								<h2 class="side-widget-title">Advertisment</h2>
								<div class="widget-text padd-0">
									<div class="ad-banner">
										<img src="http://via.placeholder.com/320x285" class="img-responsive" alt="">
									</div>
								</div>
							</div>
							
							<div class="side-widget">
								<h2 class="side-widget-title">Job Overview</h2>
								<div class="widget-text padd-0">
									<div class="ur-detail-wrap">
										<div class="ur-detail-wrap-body padd-top-20">
											<ul class="ove-detail-list">
											
												<li>
													<i class="ti-wallet"></i>
													<h5>Offerd Salary</h5>
													<span>£15,000 - £20,000</span>
												</li>
												
												<li>
													<i class="ti-user"></i>
													<h5>Gender</h5>
													<span>Male</span>
												</li>
												
												<li>
													<i class="ti-ink-pen"></i>
													<h5>Career Level</h5>
													<span>Excutive</span>
												</li>
												
												<li>
													<i class="ti-home"></i>
													<h5>Industry</h5>
													<span>Management</span>
												</li>
												
												<li>
													<i class="ti-shield"></i>
													<h5>Experience</h5>
													<span>5 Years</span>
												</li>
												
												<li>
													<i class="ti-book"></i>
													<h5>Qualification</h5>
													<span>Master Degree</span>
												</li>
												
											</ul>
										</div>
									</div>
								</div>
							</div>							
							
							<div class="statistic-item flex-middle">
								<div class="icon text-theme">
									<i class="ti-time theme-cl"></i>
								</div>
								<span class="text"><span class="number">2 months</span> ago</span>
							</div>
							
							<div class="statistic-item flex-middle">
								<div class="icon text-theme">
									<i class="ti-zoom-in theme-cl"></i>
								</div>
								<span class="text"><span class="number">1742</span> Views</span>
							</div>
							
							<div class="statistic-item flex-middle">
								<div class="icon text-theme">
								  <i class="ti-write theme-cl"></i>
								</div>
								<span class="text"><span class="number">17</span> Applicants</span>
							</div>
							
							<!-- Say Hello -->
							<div class="sidebar-widgets">
							
								<div class="ur-detail-wrap">
									<div class="ur-detail-wrap-header">
										<h4>Get In Touch</h4>
									</div>
									<div class="ur-detail-wrap-body">
										<form action="">
											<div class="form-group">
												<label>Name</label>
												<input type="email" class="form-control">
											</div>
											<div class="form-group">
												<label>Email</label>
												<input type="email" class="form-control">
											</div>
											<div class="form-group">
												<label>Message</label>
												<textarea class="form-control"></textarea>
											</div>
											<button type="submit" class="btn btn-primary">Submit</button>
										</form>
									</div>
								</div>
								
							</div>
							<!-- /Say Hello -->
							
						</div>
					</div>
					<!-- End Sidebar -->
				</div>
			</section>
			<!-- Job full detail End -->
			
			<!-- More Jobs -->
			<section class="padd-top-20">
				<div class="container">
				
					<div class="row mrg-0">
						<div class="col-md-12 col-sm-12">
							<h3>Related Jobs</h3>
						</div>
					</div>
					<!--Browse Job In Grid-->
					<div class="row mrg-0">
					
						<div class="col-md-4 col-sm-6">
							<div class="grid-view brows-job-list">
								<div class="brows-job-company-img">
									<img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
								</div>
								<div class="brows-job-position">
									<h3><a href="job-detail-2.html">Web Developer</a></h3>
									<p><span>Google</span></p>
								</div>
								<div class="job-position">
									<span class="job-num">5 Position</span>
								</div>
								<div class="brows-job-type">
									<span class="full-time">Full Time</span>
								</div>
								<ul class="grid-view-caption">
									<li>
										<div class="brows-job-location">
											<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
										</div>
									</li>
									<li>
										<p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
									</li>
								</ul>
								<span class="tg-themetag tg-featuretag">Premium</span>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-6">
							<div class="grid-view brows-job-list">
								<div class="brows-job-company-img">
									<img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
								</div>
								<div class="brows-job-position">
									<h3><a href="job-detail-2.html">Web Developer</a></h3>
									<p><span>Google</span></p>
								</div>
								<div class="job-position">
									<span class="job-num">5 Position</span>
								</div>
								<div class="brows-job-type">
									<span class="part-time">Part Time</span>
								</div>
								<ul class="grid-view-caption">
									<li>
										<div class="brows-job-location">
											<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
										</div>
									</li>
									<li>
										<p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
									</li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-6">
							<div class="grid-view brows-job-list">
								<div class="brows-job-company-img">
									<img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
								</div>
								<div class="brows-job-position">
									<h3><a href="job-detail-2.html">Web Developer</a></h3>
									<p><span>Google</span></p>
								</div>
								<div class="job-position">
									<span class="job-num">5 Position</span>
								</div>
								<div class="brows-job-type">
									<span class="freelanc">Freelancer</span>
								</div>
								<ul class="grid-view-caption">
									<li>
										<div class="brows-job-location">
											<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
										</div>
									</li>
									<li>
										<p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
									</li>
								</ul>
								<span class="tg-themetag tg-featuretag">Premium</span>
							</div>
						</div>
						
					</div>
					<!--/.Browse Job In Grid-->
					
				</div>
			</section>
			<!-- More Jobs End -->
			
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
								<p class="mb-0">© 2019 Job Stock. Designd By <a href="https://themezhub.com">Themez Hub</a> All Rights Reserved</p>
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
			
			<!-- Apply Form Code -->
			<div class="modal fade" id="apply-job" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div class="apply-job-box">
								<img src="img/com-1.jpg" class="img-responsive" alt="">
								<h4>Product Designer</h4>
								<p>Google Pvt.</p>
							</div>
							<div class="apply-job-form">
								<form class="form-inline" method="post">
									<div class="col-sm-12">
										<div class="form-group">
											<input type="text"  name="name" class="form-control" placeholder="Your Name" required="">
											<input type="email"  name="email" class="form-control" placeholder="Your Email" required="">
											<textarea class="form-control" placeholder="About You / Paste your CV"></textarea>
											<div class="fileUpload">
												<span>Upload CV</span>
												<input type="file" class="upload" />
											</div>
											<div class="center">
											<button type="submit" id="subscribe" class="submit-btn"> Apply Now </button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>   
			<!-- End Apply Form -->
			
			<!-- Job Alert Code -->
			<div class="modal fade" id="job-alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
				<div class="modal-dialog">
					
					<div class="modal-content">
						<div class="modal-header theme-bg">
							<h4 class="modal-title light">Register for new job alert</h4>
						</div>
					
						<div class="modal-body padd-top-40">
							<div class="dapply-job-form">
								<form class="form-inline" method="post">
									<div class="row">
									
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label>Your Name</label>
												<input type="text"  name="name" class="form-control" placeholder="Your Name">
											</div>
										</div>
										
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label>Your Email</label>
												<input type="email"  name="name" class="form-control" placeholder="Your Email">
											</div>
										</div>
										
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label>Title</label>
												<input type="text"  name="name" class="form-control" placeholder="Job Title">
											</div>
										</div>
										
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label>Sallery From</label>
												<input type="text"  name="name" class="form-control" placeholder="Sallery From">
											</div>
										</div>
										
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label>Category</label>
												<select id="choose-category" class="form-control">
													<option>Choose Category</option>
													<option>Automotive</option>
													<option>Design & Development</option>
													<option>Health & Medical</option>
													<option>Education</option>
													<option>Agriculture</option>
													<option>Marketing</option>
												</select>
											</div>
										</div>
										
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label>Types</label>
												<select id="types" class="form-control">
													<option>Job Type</option>
													<option>Full Time</option>
													<option>Part Time</option>
													<option>Contract Base</option>
													<option>Freelancers</option>
													<option>Others</option>
												</select>
											</div>
										</div>
										
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label>Levels</label>
												<select id="levels" class="form-control">
													<option>Choose Levels</option>
													<option>Fresher</option>
													<option>Junior</option>
													<option>Manager</option>
													<option>Senior</option>
												</select>
											</div>
										</div>
										
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label>Locations</label>
												<select id="choose-city" class="form-control">
													<option>Locations</option>
													<option>Chandigarh</option>
													<option>London</option>
													<option>England</option>
													<option>Pratapcity</option>
													<option>Ukrain</option>
													<option>Wilangana</option>
												</select>
											</div>
										</div>
										
										<div class="col-md-6 col-sm-12">
											<button type="submit" class="submit-btn"> Submit Now </button>
										</div>
										
										<div class="col-md-6 col-sm-12">
											<button type="button" class="dismis-btn" data-dismiss="modal">Close</button>
										</div>
										
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>   
			<!-- End Job Alert -->
			
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
			<script src="assets/js/custom.js"></script><script type="text/javascript" src="assets/plugins/js/counterup.min.js"></script>
			
			<!-- Google-map -->
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
			<script type="text/javascript">
				$('#map_full_width_one').gmap3({
					map: {
						options: {
							zoom: 5,
							center: [41.785091, -73.968285],
							mapTypeControl: true,
							mapTypeControlOptions: {
								style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
							},
							mapTypeId: "style1",
							mapTypeControlOptions: {
								mapTypeIds: [google.maps.MapTypeId.ROADMAP, "style1"]
							},
							navigationControl: true,
							scrollwheel: false,
							streetViewControl: true
						}
					},
					marker: {
						latLng: [40.785091, -73.968285],
						options: {animation:google.maps.Animation.BOUNCE, icon: 'assets/img/marker.png' }
					},
					styledmaptype: {
						id: "style1",
						options: {
							name: "Style 1"
						},

					}
				});

			</script>
		</div>
	</body>
</html>