<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <title>Selene | Dashboard</title>
</head>
<body>
    <div>
        <div>
            <header>
                
            </header>
        </div>

        <div>
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F96D08;">
              <a class="navbar-brand" href="#">Selene</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="home-btn">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="team.php">Our Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: white; border: 1px solid white;">Search</button>
                </form>
              </div>
            </nav>
        </div>
    <!--End of Navbar
    ==========================-->
    <!--Dashboard starts here
    =============================-->
    <div class="dashboard__wrapper">
        <div class="dashboard__left">
            <img src="images/profile1.png" class="profile-img" alt="">
           <ul>
               <li><a href="#" onclick="showDashboard()">Dashboard</a></li>
               <li><a href="#" onclick="showAssets()">Assets</a></li>
               <li><a href="#" onclick="showLiabilities()">Liabilities</a></li>
               <li><a href="#" onclick="showWorth()">Networth Calculator</a></li>
               <li><a href="#">Bank Exchange Rate</a></li>
               <li><a href="#">Newsfeed</a></li>
               <li><a href="#">Support</a></li>
               <li><a href="logout.php">Sign Out</a></li>
           </ul>
        
        </div>
        <div class="dashboard__right">
            <div class="top__wrapper">
                
               
            </div>
            <!--Dashboard
            ===================-->
            <div class="dashboard__right__contents">
                <h3>Welcome Back</h3>
                <i style="font-family: courier; font-weight: bold; color: grey;">achillesusuoyibo@gmail.com</i><br>

                <small>Take control of your assets and liabilities and get a sense of your financial worth!</small>
                <div class="financial__info">
                    <div class="financial__card assets">
                        <h4>Total Assets</h4>
                        <p>&#8358; 00.00</p>
                    </div>
                    <div class="financial__card liabilities">
                            <h4>Total Liabilities</h4>
                            <p>&#8358; 00.00</p>
                        </div>
                        <div class="financial__card assets">
                                <h4>Total Assets</h4>
                                <p>&#8358; 00.00</p>
                            </div>
                </div>
            </div>
            <!--End of Dashboard
            =========================-->
            <!--Assets tab begins here
            =========================-->
            <div class="assets__wrapper">
                <h3>Assets</h3>
                <small>Having assets is what creates wealth. Your wealth is determined by how many assets you have.</small>
                <div class="assets__card">
                <div class="assets__contents">
                        <h5>Cash</h5>
                        <input type="number" id="cash">
                    </div>

                    <div class="assets__contents">
                        <h5>Businesses</h5>
                        <input type="number" id="business">
                    </div>

                    <div class="assets__contents">
                        <h5>Real Estate</h5>
                        <input type="number" id="realEstate">
                    </div>

                    <div class="assets__contents">
                        <h5>Other Investments</h5>
                        <input type="number" id="otherInvestments">
                    </div>

                    <div class="assets__contents">
                        <h5>Retirement Savings</h5>
                        <input type="number" id="retirementSavings">
                    </div>

                    <div class="assets__contents">
                        <h5>Life Insurance</h5>
                        <input type="number" id="lifeInsurance">
                    </div>
                    
                    <div class="assets__contents">
                        <h5>Property</h5>
                        <input type="number" id="property">
                    </div><br />
                    
                    <div class="assets__contents">
                        <button type="button " id="calculate" onclick="calculateAsset()">Calculate Total</button>
                        
                        <input id="showTotal"  disabled>
                    </div>
                </div>
            </div>

            <!--End of Assets
            ======================-->
            <!--Laiability section begins here
            ==============================-->
            <div class="liabilities__wrapper">
                    <h3>Liabilities</h3>
                    <small>These are the things that takes money away from you. Try to limit them.</small>
                    <div class="liabilities__card">
                    <div class="liability__contents">
                            <h5>Debts</h5>
                            <input type="text"  id="debts">
                        </div>

                        <div class="liability__contents">
                            <h5>Bills Due</h5>
                            <input type="text" id="billsDue">
                        </div><br />
                        <div class="liability__contents">
                        <button class="liabilities__btn" id="calculateToTal" onclick="calculateLiabilities()">Calculate Total</button>
                       

                        <input id="showTotalLiabilities"  disabled>
                        </div>
                    </div>
            </div>
            <!--End of Lability section
            =============================-->
            <!--Networth Calculator section
            ===============================-->
            <div class="networth__wrapper">
                <h3>Networth Calculator</h3>
                <small>Please enter the money value of your assets and liabilities to find your networth</small>
                <div class="networth__content">
                    <form class="assets__form">
                        <div class="cash">
                            <label for="cash">Cash</label><br />
                            <input type="number" id="cash" placeholder="&#8358; 00.00">
                        </div>

                        <div class="business">
                            <label for="cash">Business</label><br />
                            <input type="number" id="business" placeholder="&#8358; 00.00">
                        </div>

                        <div class="extate">
                            <label for="cash">Real Estate</label><br />
                            <input type="number" id="realEstate" placeholder="&#8358; 00.00">
                        </div>
                            
                        <div class="investments">
                            <label for="cash">Other Investments</label><br />
                            <input type="number" id="otherInvestments" placeholder="&#8358; 00.00">
                        </div>

                        <div class="savings">
                            <label for="cash">Retirement Savings</label><br />
                            <input type="number" placeholder="&#8358; 00.00" name="savings" id="retirementSavings">
                        
                        </div>
                        
                        <div class="insurance">
                            <label for="cash">Life Insurance</label><br />
                            <input type="number" placeholder="&#8358; 00.00" id="lifeInsurance" >
                            
                        </div>
                        
                        <div class="property">
                            <label for="cash">Property</label><br />
                            <input type="number" placeholder="&#8358; 00.00" id="property">
                        </div>
                        
                        <div class="total">
                            <label for="cash">Total</label><br />
                            <h3 id="showNetAsset"></h3>
                        </div>
                    </form>

                    <form class="liability__form">
                        <div class="debt">
                            <label for="debt">Debt</label>
                            <input type="number" placeholder="&#8358; 00.00" id="debt">
                        </div>
                        <div class="bills">
                            <label for="debt">Bills Due</label>
                            <input type="number" placeholder="&#8358; 00.00" id="billsDue">
                        </div>
                        
                        <div class="total">
                            <label for="debt">Total</label>
                            <h3 id="showNetLiabilities"></h3>
                        </div>
                        
                        <button class="calculate__btn" id="calculateNet" onclick="calculateNetWorth()">Calculate</button>
                
                        
                        <div class="result">
                            <h4>Your Networth is</h4>
                            <h3 id="showNetWorth"></h3>
                        </div>
                  </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <footer class="page-footer font-small unique-color-dark">
          <div class="container text-center text-md-left mt-5">

            <div class="row mt-3">

              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Subscribe To Our Newslater</h6>
                <div>
                    <form class="footer-contact">                       
                        <input type="email" name="sub-email" placeholder="Your Email" >
                        <input type="submit" name="submit" value="Subscribe">
                    </form>
                  </div>
              </div>
 
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                <h6 class="text-uppercase font-weight-bold">Sponsors</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                  <a href="#!">Hotel Ng</a>
                </p>
                <p>
                  <a href="#!">Flutterwave</a>
                </p>
                <p>
                  <a href="#!">Start Ng</a>
                </p>
                <p>
                  <a href="team.php">Team Selene</a>
                </p>

              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                  <a href="login.php">Login</a>
                </p>
                <p>
                  <a href="signUp.php">Sign Up</a>
                </p>
                <p>
                  <a href="about.php">About Us</a>
                </p>
                <p>
                  <a href="#">Help</a>
                </p>

              </div>
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Address</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                  <i class="fas mr-3"><img src="images/office.png" width="20" height="20"></i> Team Selene Com</p>
                <p>
                  <i class="fas mr-3"><img src="images/mail.png" width="20" height="20"></i> info@example.com</p>
                <p>
                  <i class="fas mr-3"><img src="images/phone.png" width="20" height="20"></i> + 234 900 000 00</p>
                <p>
                  <i class="fas mr-3"><img src="images/fax.png" width="20" height="20"></i> + 01 000 000 00</p>

              </div>
            </div>
          </div>
          <div>
            <div class="container">
              <div align="center" class="img-foot">             
                  <h6>Connect with us on social networks!</h6>
                <div class="col-md-6 col-lg-7 text-center">
                  <a class="fb-ic">
                    <i class="fab  white-text mr-4"><img src="https://res.cloudinary.com/ros4eva/image/upload/v1566984764/facebook_mz3zyw.png"></i>
                  </a>
                  <a class="tw-ic">
                    <i class="fab  white-text mr-4"><img src="https://res.cloudinary.com/ros4eva/image/upload/v1566984742/twitter_yvunur.png"></i>
                  </a>
                  <a class="gplus-ic" href="https://github.com/hngi/Team_Selene_Networth_Calculator/">
                    <i class="fab fa-github-g white-text mr-4"><img src="https://res.cloudinary.com/ros4eva/image/upload/v1566984708/github_x9sdlq.png"></i>
                  </a>
                  <a class="li-ic">
                    <i class="fab fa-linkedin-in white-text mr-4"><img src="https://res.cloudinary.com/ros4eva/image/upload/v1567084617/linkedin_x5cgkx.png" alt="linkedin"></i>
                  </a>

                </div>

              </div>

            </div>
          </div>
          <div class="footer-copyright text-center py-3">&#169; 2019 Team Selene
          </div>

        </footer>
    </div>
    
    <div>
        <script src="js/dashboard.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="functionAssetLi.js"></script>
    </div>
</body>
</html>