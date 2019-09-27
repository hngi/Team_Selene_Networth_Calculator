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
    if(cash === "" || business === "" || realEstate === "" || otherInvestments === "" || retirementSavings === "" || lifeInsurance === "" || property === "" ) {
        alert("No input field can be left empty!");
        return;
    }
    // Maths: calculate the inputs
    var totalAsset =  parseFloat(cash) + parseFloat(business) + parseFloat(realEstate) + parseFloat(otherInvestments) + parseFloat(retirementSavings) + parseFloat(lifeInsurance) + parseFloat(property);
        // alert(total);
    
        totalAsset = totalAsset.toFixed(2);
    
    document.getElementById("showTotal").innerHTML = "N"+totalAsset;
}

