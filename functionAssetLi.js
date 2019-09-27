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
        alert("To calculate assets, provide values for all input fields");
        return;
    }
    // Maths: calculate the inputs
    let totalAsset =  parseFloat(cash) + parseFloat(business) + parseFloat(realEstate) + parseFloat(otherInvestments) + parseFloat(retirementSavings) + parseFloat(lifeInsurance) + parseFloat(property);
        
    
        // round up totalAsset to 2 decimal places
    totalAsset = totalAsset.toFixed(2);

        // display totalAsset 
    document.getElementById('showTotal').value = "N" + totalAsset;

         return totalAsset;

}

        
function calculateLiabilities(){
    // store value of each individual input
    let debts = document.getElementById('debts').value;
    let billsDue = document.getElementById('billsDue').value;

     
   
   
    //quick validation
    if(debts === "" || billsDue === "") {
        alert("To calculate liabilities, provide values for all input fields");
        return;
    }
    // Maths: calculate the inputs
    let totalLiabilities =  parseFloat(debts) + parseFloat(billsDue);
       
        totalLiabilities = totalLiabilities.toFixed(2);

        document.getElementById('showTotalLiabilities').value = "N" + totalLiabilities;
        

    return totalLiabilities;
    
}
 

  
// function for calculating net worth
  function calculateNetWorth() {
    
     let finalAssets = calculateAsset();
     let finalLiabilities = calculateLiabilities();

     let netWorth = finalAssets - finalLiabilities;
     document.getElementById('showNetWorth').value = "N"+ netWorth;
    
  }



