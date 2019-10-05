<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: sign-in.php");
    exit;
}
?>
<?php
if (isset($_POST['calc-networth']))
    {
      if(isset($_POST['calc-networth']))
      {
        // Assets

        $user = $_SESSION['username'];
        $assetsCash = $_POST['cash'];
        $assetsBusiness = $_POST['business'];
        $assetsEstate = $_POST['real-estate'];
        $assetsInvestment = $_POST['investment'];
        $assetsSavings = $_POST['savings'];
        $assetsProperty = $_POST['property'];

        $totalAssets = $assetsCash + $assetsBusiness + $assetsEstate + $assetsInvestment + $assetsSavings + $assetsProperty;

        $assetsfileType = "assetsFor$user.txt";
        $assetsfile = fopen($assetsfileType, "w");
        fputs($assetsfile, $totalAssets);       
        fclose($assetsfile);

        // Liabilities

        $debts = $_POST['debt'];
        $bills = $_POST['bills'];
        

        $totalLiabilities = $debts + $bills;

        $liabilitiesFileType = "liabilitiesFor$user.txt";
        $liabilitiesfile = fopen($liabilitiesFileType, "w");
        fputs($liabilitiesfile, $totalLiabilities);
        fclose($liabilitiesfile);

        //Calc total networth

        $totalNetworth = $totalAssets - $totalLiabilities;

        $networthFileType = "networthFor$user.txt";
        $networthfile = fopen($networthFileType, "w");
        fputs($networthfile, $totalNetworth);
        fclose($networthfile);
      }
    }
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Team Selene Dashboard</title>
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
                            <div class="media-body">
                                <span><?php echo htmlspecialchars($_SESSION["username"]); ?><i class="zmdi zmdi-chevron-down"></i></span>
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
                        <a class="dropdown-item" href="logout.php"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
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
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php" data-target="#dash_drp">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                            
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="javascript:void(0);" data-target="#dash_drp">
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

						<div class="col-lg-5 hk-sec-wrapper" >
								<div class="card overflow-hide border-0">
									<div class="card-body pa-0">
											<h5 class="hk-sec-title">Calculate Your Networth</h5>
											<p class="mb-25">Please enter the money value of your assets and liabilities to find your networth.</p>

											<div class="row">
													<div class="col-sm">
														<!-- <form action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" methond="post"> -->
														<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" name="calc-networth">
																<h5 class="hk-sec-title">Assets</h5>
																<div class="form-group">
																		<label for="cash">Cash</label>
																		<div class="input-group">
																			<div class="input-group-prepend">
																				<span class="input-group-text">₦</span>
																			</div>
																			<input class="form-control" name="cash" placeholder="00.00" type="number" value="00">
																		</div>
																	</div>

																	<div class="form-group">
																			<label for="business">Business</label>
																			<div class="input-group">
																				<div class="input-group-prepend">
																					<span class="input-group-text">₦</span>
																				</div>
																				<input class="form-control" name="business" placeholder="00.00" type="number" value="00">
																			</div>
																		</div>

																		<div class="form-group">
																				<label for="real-estate">Real Estate</label>
																				<div class="input-group">
																					<div class="input-group-prepend">
																						<span class="input-group-text">₦</span>
																					</div>
																					<input class="form-control" name="real-estate" placeholder="00.00" type="number" value="00">
																				</div>
																			</div>
		
																			<div class="form-group">
																					<label for="investment">Other Investments</label>
																					<div class="input-group">
																						<div class="input-group-prepend">
																							<span class="input-group-text">₦</span>
																						</div>
																						<input class="form-control" name="investment" placeholder="00.00" type="number" value="00">
																					</div>
																				</div>
																				<div class="form-group">
																						<label for="savings">Retirement Savings</label>
																						<div class="input-group">
																							<div class="input-group-prepend">
																								<span class="input-group-text">₦</span>
																							</div>
																							<input class="form-control" name="savings" placeholder="00.00" type="number" value="00">
																						</div>
																					</div>

																					<div class="form-group">
																							<label for="property">Properties</label>
																							<div class="input-group">
																								<div class="input-group-prepend">
																									<span class="input-group-text">₦</span>
																								</div>
																								<input class="form-control" name="property" placeholder="00.00" type="number" value="00">
																							</div>
																						</div>
	
                                                                                        <h5 class="hk-sec-title ">Total Assets: <span class="js--show-assets" id="showNetAsset">
                                                                                            <?php 
                                                                                        $user = $_SESSION['username'];
                                                                                        $assetsFileOfUser = "assetsFor$user.txt";
                                                                                        $file = fopen($assetsFileOfUser,"r");
                                                                                        echo "₦".fgets($file);
                                                                                        ?>
                                                                                        </span></h5>
													</div>
												</div>

									</div>
									
								</div>
							
							
							</div>
						

							<div class="col-lg-5 hk-sec-wrapper" >
									<div class="card overflow-hide border-0">
										<div class="card-body pa-0">
												<h5 class="hk-sec-title"></h5>
												<p class="mb-25"></p>
	
												<div class="row">
														<div class="col-sm">
															
																	<h5 class="hk-sec-title">Liabilities</h5>
																	<div class="form-group">
																			<label for="debt">Debt</label>
																			<div class="input-group">
																				<div class="input-group-prepend">
																					<span class="input-group-text">₦</span>
																				</div>
																				<input class="form-control" name="debt" placeholder="00.00" type="number" value="00">
																			</div>
																		</div>
	
																		<div class="form-group">
																				<label for="bills">Bills Due</label>
																				<div class="input-group">
																					<div class="input-group-prepend">
																						<span class="input-group-text">₦</span>
																					</div>
																					<input class="form-control" name="bills" placeholder="00.00" type="number" value="00">
																				</div>
																			</div>
	
																			<h5 class="hk-sec-title" style="margin: 1.5rem 0;">Total Liabilities: <span id="showNetLiabilities" class="js--show-liabilities">
                                                                            <?php 
                                                                            $user = $_SESSION['username'];
                                                                            $liabilitiesFileOfUser = "liabilitiesFor$user.txt";
                                                                            $file = fopen($liabilitiesFileOfUser,"r");
                                                                            echo "₦".fgets($file);
                                                                            ?>                                                         
                                                                            </span></h5>
		
                                                                            <button type="submit" class="btn btn-primary mr-10" name="calc-networth" >Calculate</button>
                                                                <button type="reset" class="btn btn-light">Reset</button>

                                                                
                                                                
                                                                
                                                            </form>
                                                            
                                                            <h5 class="hk-sec-title" style="margin-top: 2.5rem;">Your NetWorth: <span class="js--show-networth" id="showNetWorth">
                                                                <?php 
                                                                $user = $_SESSION['username'];
                                                                $networthFileOfUser = "networthFor$user.txt";
                                                                $file = fopen($networthFileOfUser,"r");
                                                                echo "₦".fgets($file);
                                                                ?>
                                                            </span></h5>
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
    
	
	 
    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
    <script src="js/calc.js"></script>    
         

	
</body>

</html>