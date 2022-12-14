<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("Location:../index.php");
}
error_reporting(0);
include_once "config.php";
$sql = "SELECT COUNT(*) FROM jobs WHERE by_user = '".$_SESSION['id']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$job_posted = $row['COUNT(*)'];
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
								
									<!-- <div class="dashboard-avatar">
										
										<div class="dashboard-avatar-text">
											<h4><?php echo $_SESSION["full_name"] ?></h4>
											<span><?php echo $_SESSION["username"] ?></span>
										</div>
										
									</div> -->
								
								<div class="dashboard-menu">
									<ul>
										<li class="active"><a href="dashboard.php"><i class="ti-dashboard"></i>Profile</a></li>
										<li><a href="pass_reset.php"><i class="ti-ruler-pencil"></i>Password</a></li>
										<li><a href="#"><i class="ti-briefcase"></i>Notifications</a></li>
										<li><a href="#"><i class="ti-user"></i>Address</a></li>
										<li><a href="#"><i class="ti-wallet"></i>Billing Info</a></li>
										<li><a href="#"><i class="ti-cup"></i>Cancel a Task</a></li>
										<li><a href="#"><i class="ti-flag-alt-2"></i>Account Balance</a></li>
										<li><a href="#"><i class="ti-id-badge"></i>Transaction</a></li>
										<li><a href="#"><i class="ti-power-off"></i>Delete Account</a></li>
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
										<h4><i class="ti-settings"></i>Cancel Tasks</h4>
									</div>
                                    <section class="accordion">
				<div class="container">
					
					<!-- search filter -->
					
					
					<!-- Freelancers Start -->
					<?php
                    $id=$_SESSION["id"];
					$query="SELECT * FROM jobs Where id=$id" ;
					$result=mysqli_query($conn,$query);
					while($row=mysqli_fetch_assoc($result))
					{
						?>
					<div class="row">
						
						<!-- Single Freelancer & Premium job -->
						<div class="col-md-4 col-sm-6">
							<div class="popular-jobs-container">
								<div class="popular-jobs-box">
									<span class="popular-jobs-status bg-success"><?php echo $row["job_type"] ?></span>
									<h4 class="flc-rate">$<?php echo $row["salary"]?></h4>
									<div class="popular-jobs-box">
										<div class="popular-jobs-box-detail">
											<h4><?php echo $row["job_title"]?></h4>
											<span class="desination"><?php echo $_SESSION["full_name"] ?> </span>
										</div>
									</div>
									<div class="popular-jobs-box-extra">
										<!-- <ul>
											<li>Php</li>
											<li>Android</li>
											<li>Html</li>
											<li class="more-skill bg-primary">+3</li>
										</ul> -->
										<!-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p> -->
									</div>
                                    <form action="">
									<a href="job-detail.php?id=<?php echo $row["id"] ?>" class="btn btn-popular-jobs bt-1" name="del">Cancel</a>
                                    </form>
								</div>
							</div>
						</div>
                        <?php }?>
									
									<div class="dashboard-caption-wrap">
</div>
									
										<!-- Overview -->
											
											<!-- <div class="col-lg-3 col-md-6 col-sm-12">
												<div class="dashboard-stat widget-2">
													<div class="dashboard-stat-content"><h4>80</h4> <span>Pending Jobs</span></div>
													<div class="dashboard-stat-icon"><i class="ti-layers"></i></div>
												</div>	
											</div> -->
											
											<!-- <div class="col-lg-3 col-md-6 col-sm-12">
												<div class="dashboard-stat widget-3">
													<div class="dashboard-stat-content"><h4>0</h4> <span>Total Views</span></div>
													<div class="dashboard-stat-icon"><i class="ti-pie-chart"></i></div>
												</div>	
											</div>
											 -->
											<!-- <div class="col-lg-3 col-md-6 col-sm-12">
												<div class="dashboard-stat widget-4">
													<div class="dashboard-stat-content"><h4>107</h4> <span>Expire Jobs</span></div>
													<div class="dashboard-stat-icon"><i class="ti-bookmark"></i></div>
												</div>	
											</div> -->
										<!-- </div> -->
										
										<!-- Notifications -->
										<!-- <div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="dashboard-gravity-list with-icons">
													<h4>Recent Activities</h4>
													<ul>
														<li>
															<i class="dash-icon-box ti-layers"></i> Your job <strong><a href="#">App Developer</a></strong> has been approved!
															<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
														</li>

														<li>
															<i class="dash-icon-box ti-star"></i> Your job <strong><a href="#">Android Developer</a></strong> expire soon!
															<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
														</li>

														<li>
															<i class="dash-icon-box ti-heart"></i> Someone bookmarked your <strong><a href="#">Web Designer</a></strong> job!
															<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
														</li>

														<li>
															<i class="dash-icon-box ti-star"></i> Gracie Mahmood left a review <div class="numerical-rating mid" data-rating="3.8"></div> on <strong><a href="#">Sonal Cafe</a></strong>
															<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
														</li>

														<li>
															<i class="dash-icon-box ti-heart"></i> Your job <strong><a href="#">UI/UX Designer</a></strong> has been approved!
															<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
														</li>

														<li>
															<i class="dash-icon-box ti-heart"></i> Someone bookmarked your <strong><a href="#">PHP Developer</a></strong> job!
															<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
														</li>

														<li>
															<i class="dash-icon-box ti-star"></i> Your job <strong><a href="#">Software Developer</a></strong> expire soon!
															<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
														</li>
													</ul>
												</div>
											</div>
											
											<div class="col-lg-6 col-md-12">
												<div class="dashboard-gravity-list invoices with-icons">
													<h4>Invoices</h4>
													<ul>
														
														<li><i class="dash-icon-box ti-files"></i>
															<strong>Starter Plan</strong>
															<ul>
																<li class="unpaid">Unpaid</li>
																<li>Order: #20551</li>
																<li>Date: 01/08/2019</li>
															</ul>
															<div class="buttons-to-right">
																<a href="#" class="button gray">View Invoice</a>
															</div>
														</li>
														
														<li><i class="dash-icon-box ti-files"></i>
															<strong>Basic Plan</strong>
															<ul>
																<li class="paid">Paid</li>
																<li>Order: #20550</li>
																<li>Date: 01/07/2019</li>
															</ul>
															<div class="buttons-to-right">
																<a href="#" class="button gray">View Invoice</a>
															</div>
														</li>

														<li><i class="dash-icon-box ti-files"></i>
															<strong>Extended Plan</strong>
															<ul>
																<li class="paid">Paid</li>
																<li>Order: #20549</li>
																<li>Date: 01/06/2019</li>
															</ul>
															<div class="buttons-to-right">
																<a href="#" class="button gray">View Invoice</a>
															</div>
														</li>
														
														<li><i class="dash-icon-box ti-files"></i>
															<strong>Platinum Plan</strong>
															<ul>
																<li class="paid">Paid</li>
																<li>Order: #20548</li>
																<li>Date: 01/05/2019</li>
															</ul>
															<div class="buttons-to-right">
																<a href="#" class="button gray">View Invoice</a>
															</div>
														</li>
														
														<li><i class="dash-icon-box ti-files"></i>
															<strong>Extended Plan</strong>
															<ul>
																<li class="paid">Paid</li>
																<li>Order: #20547</li>
																<li>Date: 01/04/2019</li>
															</ul>
															<div class="buttons-to-right">
																<a href="#" class="button gray">View Invoice</a>
															</div>
														</li>
														
														<li><i class="dash-icon-box ti-files"></i>
															<strong>Platinum Plan</strong>
															<ul>
																<li class="paid">Paid</li>
																<li>Order: #20546</li>
																<li>Date: 01/03/2019</li>
															</ul>
															<div class="buttons-to-right">
																<a href="#" class="button gray">View Invoice</a>
															</div>
														</li>

													</ul>
												</div>
											</div>	
										</div> -->
										
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
			<script type="text/javascript" src="assets/plugins/js/gmap3.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/jquery.easy-autocomplete.min.js"></script>
			<!-- Custom Js -->
			<script src="assets/js/custom.js"></script><script type="text/javascript" src="assets/plugins/js/counterup.min.js"></script>
			
			<script>
				$('#company-dob').dateDropper();
			</script>
		</div>
	</body>
</html>