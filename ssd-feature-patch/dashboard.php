<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page

// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: sign-in.php");
//     exit;
// }
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Selene NetChecker - Dashboard</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- vector map CSS -->
    <link href="vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
	
	<!-- Toastr CSS -->
    <link href="vendors/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    
	
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-menu"></i></a>
            <a class="navbar-brand" href="dashboard.php">
                <img class="brand-img d-inline-block mr-5" src="dist/img/logo.png" alt="brand" />Selene
            </a>
            <ul class="navbar-nav hk-navbar-content">
                <li class="nav-item">
                    <a id="navbar_search_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-search"></i></a>
                </li>
                <li class="nav-item">
                    <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-settings"></i></a>
                </li>
           
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="dist/img/avatar10.jpg" alt="user" class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <!-- <div class="media-body">
                                <span><?php echo htmlspecialchars($_SESSION["username"]); ?><i class="zmdi zmdi-chevron-down"></i></span>
							</div> -->
							
							<div class="media-body">
                                <span id='currentUserEmail'><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <!-- <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-card"></i><span>My balance</span></a>
                        <a class="dropdown-item" href="inbox.html"><i class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a> -->
                        <!-- <div class="dropdown-divider"></div> -->
                        <div class="sub-dropdown-menu show-on-hover">
                            <a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
                            <div class="dropdown-menu open-left-side">
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php"><i class="dropdown-icon zmdi zmdi-power"></i><span onclick ='logout()'>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <form role="search" class="navbar-search">
            <div class="position-relative">
                <a href="javascript:void(0);" class="navbar-search-icon"><i class="ion ion-ios-search"></i></a>
                <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
                <a id="navbar_search_close" class="navbar-search-close" href="#"><i class="ion ion-ios-close"></i></a>
            </div>
        </form>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <nav class="hk-nav hk-nav-light">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item active">
                            <a class="nav-link" href="javascript:void(0);" data-target="#dash_drp">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                            
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="calc.php" data-target="#dash_drp">
                                <i class="ion ion-ios-calculator"></i>
                                <span class="nav-link-text">NetWorth calculator</span>
                            </a>
                            
                        </li>                      
                        
                                      

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#recover_drp">
                                    <i class="ion ion-ios-key"></i>
                                    <span class="nav-link-text">Recover Password</span>
                                    
                                </a>
                            <ul id="recover_drp" class="nav flex-column collapse collapse-level-2">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="reset-password.php">Forgot Password</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="reset-password.php">Reset Password</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->


                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#pages_drp">
                                <i class="ion ion-ios-copy"></i>
								<span class="nav-link-text">Pages</span>
                            </a>
                            <ul id="pages_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Faq</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                          </ul>
                                
                        
                    </ul>
                    
                    <hr class="nav-separator">
                    <div class="nav-header">
                        <span>Getting Started</span>
                        <span>GS</span>
                    </div>
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ion ion-ios-book"></i>
                                <span class="nav-link-text">Documentation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav -->

        <!-- Setting Panel -->
        <div class="hk-settings-panel">
            <div class="nicescroll-bar position-relative">
                <div class="settings-panel-wrap">
                    <div class="settings-panel-head mb-15">
                       <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
                    </div>
                    
                    
                    <hr>
                    <h6 class="mb-5">Navigation</h6>
                    <p class="font-14">Menu comes in two modes: dark & light</p>
                    <div class="button-list hk-nav-select mb-10">
                        <button type="button" id="nav_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="nav_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <h6 class="mb-5">Top Nav</h6>
                    <p class="font-14">Choose your liked color mode</p>
                    <div class="button-list hk-navbar-select mb-10">
                        <button type="button" id="navtop_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="navtop_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>Scrollable Header</h6>
                        <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                    </div>
                    <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
                </div>
            </div>
            <img class="d-none" src="dist/img/logo-light.png" alt="brand" />
            <img class="d-none" src="dist/img/logo-dark.png" alt="brand" />
        </div>
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hk-row">
							<div class="col-lg-3 col-md-6">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">Users</span>
											</div>
											<div>
												<span class="text-success font-14 font-weight-500">+10%</span>
											</div>
										</div>
										<div class="text-center">
											<span class="d-block display-4 text-dark mb-5">36.1K</span>
											<small class="d-block">172,458 Target Users</small>
										</div>
									</div>
								</div>
							
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">Campaign Leads</span>
											</div>
											<div>
												<span class="text-success font-14 font-weight-500">+12.5%</span>
											</div>
										</div>
										<div class="text-center">
											<span class="d-block display-4 text-dark mb-5"><span class="counter-anim">168,856</span></span>
											<small class="d-block">472,458 Targeted</small>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">New Contacts</span>
											</div>
											<div>
												<span class="text-warning font-14 font-weight-500">-2.8%</span>
											</div>
										</div>
										<div class="text-center">
											<span class="d-block display-4 text-dark mb-5">73</span>
											<small class="d-block">100 Targeted</small>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">Win/Loss Ratio</span>
											</div>
											<div>
												<span class="text-danger font-14 font-weight-500">-75%</span>
											</div>
										</div>
										<div class="text-center">
											<span class="d-block display-4 text-dark mb-5">48:65</span>
											<small class="d-block">42:32 Targeted</small>
										</div>
									</div>
								</div>
							</div>							
						</div>
			
						<div class="hk-row">
							<div class="col-lg-7">
								<div class="card">
									<div class="card-header card-header-action">
										<h6>Country Stats<small class="text-muted pl-10">Team Selene</small></h6>
										<div class="d-flex align-items-center card-action-wrap">
											<a href="#" class="inline-block refresh mr-15">
												<i class="ion ion-md-arrow-down"></i>
											</a>
											<a href="#" class="inline-block full-screen">
												<i class="ion ion-md-expand"></i>
											</a>
										</div>
									</div>
									<div class="card-body pa-0">
										<div class="pa-20">
											<div id="world_map_marker_1" style="height: 390px"></div>
										</div>
										<div class="table-wrap">
											<div class="table-responsive">
												<table class="table table-sm table-hover mb-0">
													<thead>
														<tr>
															<th class="w-25">Country</th>
															<th>Sessions</th>
															<th>Goals</th>
															<th>Goals Rate</th>
															<th>Bounce Rate</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Nigeria</td>
															<td>55,555</td>
															<td>210</td>
															<td>2.46%</td>
															<td>0.26%</td>
														</tr>
														<tr>
															<td>India</td>
															<td>24,152</td>
															<td>135</td>
															<td>0.58%</td>
															<td>0.43%</td>
														</tr>
														
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="card overflow-hide border-0">
									<div class="card-body pa-0">
										<div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
											<div class="fadeOut item img-background overlay-wrap bg-warning">
												<div class="position-relative z-index-2 pa-20">
													<div class="position-relative text-white mnh-225p">
														<p>Get your networth calculated and sentto your mail in three minutes, Discover where you stand with just a few questions</p>
														<div class="media position-absolute b-0 l-0 align-items-center">
															<div class="media-img-wrap d-flex mr-15">
																<div class="avatar avatar-sm">
																	<span class="avatar-text avatar-text-inv-yellow rounded-circle"><span class="initial-wrap"><span>UT</span></span></span>
																</div>
															</div>
															<div class="media-body">
																<span class="d-block font-14 font-weight-500">Utibe Etim</span>
																<span class="d-block font-12">Team Lead, Selene Team</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="fadeOut item img-background overlay-wrap bg-warning">
												<div class="position-relative z-index-2 pa-20">
													<div class="position-relative text-white mnh-225p">
														<p>The net worth calculator helps you work out:
                                                            if your total assets outweigh your debts
                                                            the strength of your current financial situation</p>
														<div class="media position-absolute b-0 l-0 align-items-center">
															<div class="media-img-wrap d-flex mr-15">
																<div class="avatar avatar-sm">
																	<span class="avatar-text avatar-text-inv-green rounded-circle"><span class="initial-wrap"><span>UE</span></span></span>
																</div>
															</div>
															<div class="media-body">
																<span class="d-block font-14 font-weight-500">Uduak Essien</span>
																<span class="d-block font-12">Backend Developer</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							
								<div class="card">
									<div class="card-header card-header-action">
										<h6>Recent Activity</h6>
										<div class="d-flex align-items-center card-action-wrap">
											<div class="inline-block dropdown">
												<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Refresh</a>													
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="user-activity user-activity-sm">
											<div class="media">
												<div class="media-img-wrap">
													<div class="avatar avatar-xs">
														<img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Adeyemi Adeshina</span><span class="pl-5">Checked his networth.</span></span>
														<span class="d-block font-13">3 hours ago</span>
													</div>
												</div>
											</div>
											<div class="media">
												<div class="media-img-wrap">
													<div class="avatar avatar-xs">
														<img src="dist/img/avatar3.jpg" alt="user" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Badmus Akeem Adedayo</span><span class="pl-5">joined team selene</span></span>
														<span class="d-block font-13 mb-10">6 days ago</span>
													</div>
													
												</div>
											</div>
											<div class="media">
												<div class="media-img-wrap">
													<div class="avatar avatar-xs">
														<img src="dist/img/avatar4.jpg" alt="user" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Nnaemeka Igboanyika Robin</span><span class="pl-5">checked his networth</span></span>
														<span class="d-block font-13">32 days ago</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							
							</div>
						</div>
						
                <!-- /Row -->
            </div>
            <!-- /Container -->
			
            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Site by<a href="#" class="text-dark" >Team Selene</a> © 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>
	
	<!-- Counter Animation JavaScript -->
	<script src="vendors/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="vendors/jquery.counterup/jquery.counterup.min.js"></script>
	
	<!-- Sparkline JavaScript -->
    <script src="vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
	
	<!-- Vector Maps JavaScript -->
    <script src="vendors/vectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="dist/js/vectormap-data.js"></script>

	<!-- Owl JavaScript -->
    <script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Toastr JS -->
    <script src="vendors/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
    
	<!-- Apex JavaScript -->
    <script src="vendors/apexcharts/dist/apexcharts.min.js"></script>
	<script src="dist/js/irregular-data-series.js"></script>
	 
    <!-- Init JavaScript -->
	<script src="js/util/index.js"></script>
	<script src="js/storage.localstorage.js"></script>
	<script src="dist/js/init.js"></script>
	<script src="dist/js/dashboard-data.js"></script>
	<script src="js/dashboard.js"></script>

	
</body>

</html>