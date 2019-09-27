function calculateAsset(){
    // store value of each individual input
    var cash = document.getElementById('cash').value;
    var business = document.getElementById('business').value;
    var realEstate = document.getElementById('realEstate').value;
    var otherInvestments= document.getElementById('otherInvestments').value;
    var retirementSavings= document.getElementById('retirementSavings').value;
    var lifeInsurance= document.getElementById('lifeInsurance').value;
    var property = document.getElementById('property').value;
    
   
    //quick validation
    if(cash === "" || business === "" || realEstate === "" || otherInvestments === "" || retirementSavings === "" || lifeInsurance === "" || property === "") {
        alert("No input field can be left empty!");
        return;
    }
    // Maths: calculate the inputs
    var totalAsset =  parseFloat(cash) + parseFloat(business) + parseFloat(realEstate) + parseFloat(otherInvestments) + parseFloat(retirementSavings) + parseFloat(lifeInsurance) + parseFloat(property);
        
    
        // round up totalAsset to 2 decimal places
        totalAsset = totalAsset.toFixed(2);

        // display totalAsset 
        document.getElementById('showTotal').innerHTML = "N"+ totalAsset;

}

        
function calculateLiabilities(){
    // store value of each individual input
    var debts = document.getElementById('debts').value;
    var billsDue = document.getElementById('billsDue').value;
   
   
    //quick validation
    if(debts === "" || billsDue === "") {
        alert("No input field can be left empty!");
        return;
    }
    // Maths: calculate the inputs
    var totalLiabilities =  parseFloat(debts) + parseFloat(billsDue);
       
        totalLiabilities = totalLiabilities.toFixed(2);
        
        document.getElementById('showTotalLiabilities').innerHTML = "N"+totalLiabilities;
    
}



