<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Selene Networth - Dashboard</title>
</head>
<div class="main__wrapper">
    <div class="navbar">
        <div class="container">
            <div class="navbar__contents">
                <div class="navbar__logo">
                    <h2>Selene Networth</h2>
                </div>
                <ul class="navbar__items">
                     <li><a><small>. . . Take control of your assets and liabilities and get a sense of your financial worth!</small></a></li>
                    <!-- <li><a href="/">About Us</a></li>
                    <li><a href="/">Team</a></li>
                    <li><a href="/">Sign Up</a></li> -->
                    <!-- <li><a href="index.html">Log Out</a></li> -->
                </ul>
            </div>
        </div>
    </div>
    <!--End of Navbar
    ==========================-->
    <!--Dashboard starts here
    =============================-->
    <div class="dashboard__wrapper">
        <div class="dashboard__left">
            <img src="./assets/profile1.png" class="profile-img" alt="">
           <ul>
               <li><a href="#" onclick="showDashboard()">Dashboard</a></li>
               <li><a href="#" onclick="showAssets()">Assets</a></li>
               <li><a href="#" onclick="showLiabilities()">Liabilities</a></li>
               <li><a href="#" onclick="showWorth()">Networth Calculator</a></li>
               <li><a href="#">Help</a></li>
               <!-- <li><a href="#">Newsfeed</a></li>
               <li><a href="#">Support</a></li> -->
           </ul>
        
        </div>
        <div class="dashboard__right">
            <div class="top__wrapper">
                <form class="serach__form">
                    <i class="fa fa-search"></i>
                    <input type="text" placeholder="Search ..." name="search">
                </form>
               <div class="top__right">
                    <p>achillesusuoyibo@gmail.con</p>
                    <a href="">Sign Out</a>
               </div>
            </div>
            <!--Dashboard===================-->
            <div class="dashboard__right__contents">
                <h3>Welcome Back</h3>
                <!-- <small>Take control of your assets and liabilities and get a sense of your financial worth!</small> -->
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
                        
                        <h3 id="showTotal"></h3>
                    </div>
                </div>
            </div>
            <!--End of Assets
            ======================-->
            <!--Laiability section begins here
            ==============================-->
            <div class="liabilities__wrapper">
                    <h3>Liabilities</h3>
                    <small>These are the things that take money away from you. Try to limit them.</small>
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
                        <h3 id="showTotalLiabilities"></h3>
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
<script src="js/dashboard.js"></script>
<script src="js/dashboard_functions.js"></script>
<script src="functionAsset.js"></script>
<script src="functionLiabilities.js"></script>

</body>
</html>
