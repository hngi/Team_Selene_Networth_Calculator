
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




