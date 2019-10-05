<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: sign-in.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <title>Selene Networth - Dashboard</title>
</head>
<div class="main__wrapper">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(0,191,255);">
            <a class="navbar-brand" href="#">Selene</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="background-color: rgb(0,191,255);">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="home-btn">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">About Us</a>
                    </li>
                </ul>
                
            </div>
        </nav>
    </div>
   
    <!--End of Navbar
    ==========================-->
    <!--Dashboard starts here
    =============================-->
    <div class="dashboard__wrapper">
        <div class="dashboard__left">
            <img src="./imgs/profile1.png" class="profile-img" alt="">
           <ul>
               <li><a href="#" onclick="showDashboard()">Dashboard</a></li>
               <!-- <li><a href="#" onclick="showAssets()">Assets</a></li>
               <li><a href="#" onclick="showLiabilities()">Liabilities</a></li> -->
               <li><a href="#" onclick="showWorth()">Networth Calculator</a></li>
                <li><a href="logout.php">Logout</a></li>
               <!-- <li><a href="#">Bank Exchange Rate</a></li>
               <li><a href="#">Newsfeed</a></li>
               <li><a href="#">Support</a></li> -->
           </ul>
        
        </div>
        <div class="dashboard__right">
            <div class="top__wrapper">
                
               <div class="top__right">
                    <!-- <p>achillesusuoyibo@gmail.con</p> -->
                    <!-- <a href="logout.php">Sign Out</a> -->
               </div>
            </div>
            <!--Dashboard
            ===================-->
            <div class="dashboard__right__contents">
                    <i class="fa fa-bars openbars" onclick="showDashboardLeft()"></i>
                <h3>Welcome <em><?php echo htmlspecialchars($_SESSION["username"]); ?></em></h3>
                <small>Take control of your assets and liabilities and get a sense of your financial worth!</small>
              
                <br />
                <br />
                <button class="dashboard__btn" onclick="showWorth()">Calculate Networth</button>
            </div>
          


            <!--Networth Calculator section
            ===============================-->
            <div class="networth__wrapper">
                    <i class="fa fa-bars openbars" onclick="showDashboardLeft()"></i>
                <h3> Calculate Your Networth</h3>
                <small>Please enter the money value of your assets and liabilities to find your networth</small>
                <div class="networth__content">
                    <div class="assets__form">
                        <h3 style="font-weight:bold">Assets</h3>
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
                    </div>

                    <div class="liability__form">
                    <h3 style="font-weight:bold">Liabilities</h3>
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
                        
                        <button type="button" class="calculate__btn" id="calculateNet" onclick="calculateNetWorth()">Calculate</button>
                
                        
                        <div class="result">
                            <h4>Your Networth is</h4>
                            <h3 id="showNetWorth"></h3>
                        </div>
                  </div>

                </div>
                </div>
            </div>
        </div>
    </div>
</div>




<script src="js/dashboard.js"></script>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <script>
            
// function for calculating assets
function calculateAsset(){
    // store value of each individual input
    let cash = document.getElementById('cash').value;
    let business = document.getElementById('business').value;
    let realEstate = document.getElementById('realEstate').value;
    let otherInvestments= document.getElementById('otherInvestments').value;
    let retirementSavings= document.getElementById('retirementSavings').value;
    let lifeInsurance= document.getElementById('lifeInsurance').value;
    let property = document.getElementById('property').value;
    


    
   
    //quick validation
    if(cash === "" || business === "" || realEstate === "" || otherInvestments === "" || retirementSavings === "" || lifeInsurance === "" || property === "") {

        alert("Provide values for all input fields");
        return;
    }
    // Maths: calculate the inputs
    let totalAsset =  parseFloat(cash) + parseFloat(business) + parseFloat(realEstate) + parseFloat(otherInvestments) + parseFloat(retirementSavings) + parseFloat(lifeInsurance) + parseFloat(property);
        
    
        // round up totalAsset to 2 decimal places
    totalAsset = totalAsset.toFixed(2);

        // display totalAsset 
    document.getElementById('showNetAsset').innerHTML = "N" + totalAsset;

         return totalAsset;


}

        
function calculateLiabilities(){
    // store value of each individual input

    let debts = document.getElementById('debt').value;
    let billsDue = document.getElementById('billsDue').value;

     

   
   
    //quick validation
    if(debts === "" || billsDue === "") {

        alert("Provide values for all input fields");
        return;
    }
    // Maths: calculate the inputs
    let totalLiabilities =  parseFloat(debts) + parseFloat(billsDue);
       
        totalLiabilities = totalLiabilities.toFixed(2);

    document.getElementById('showNetLiabilities').innerHTML = "N" + totalLiabilities;
        

    return totalLiabilities;
    
}
 

  
// function for calculating net worth
  function calculateNetWorth() {
    
     let finalAssets = calculateAsset();
     let finalLiabilities = calculateLiabilities();

     let netWorth = finalAssets - finalLiabilities;
      netWorth = netWorth.toFixed(2);
      if (!isNaN(netWorth)) {
     document.getElementById('showNetWorth').innerHTML = "N"+ netWorth;
      
      }
      return calculateNetWorth;
    
  }

        </script>
</body>
</html>