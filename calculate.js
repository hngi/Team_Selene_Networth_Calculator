 let finalAssets;
 let finalLiabilities;
 let netWorth;
 let sumAL;

 function keyFunc() {
     calculateAssets();
     calculateLiabilities();
     calculateNetWorth();
     sumUp();
     percentageAsset();
     percentageLiabilities();
    }

 function calculateAssets(){
     // store value of each individual input
    let cash = document.getElementById('cash').value;
    let business = document.getElementById('business').value;
    let realEstate = document.getElementById('realEstate').value;
    let otherInvestments= document.getElementById('otherInvestments').value;
    let retirementSavings= document.getElementById('retirementSavings').value;
  
    let property = document.getElementById('property').value;
   

    //quick validation
    if(cash === "" || business === "" || realEstate === "" || otherInvestments === "" || retirementSavings === "" || property === "" ) {
        alert("No input field can be left empty!");
        return;
    }
    
    // Maths: calculate the inputs
    let totalAsset =  parseFloat(cash) + parseFloat(business) + parseFloat(realEstate) + parseFloat(otherInvestments) + parseFloat(retirementSavings)  + parseFloat(property);
        
    
    // display totalAsset
        totalAsset = totalAsset.toFixed(2);
    
    document.getElementById("showTotalAsset").innerHTML = "₦" + totalAsset;
    return totalAsset;
 }


 function calculateLiabilities() {
    
    // store value of each input
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


        // display totalLiabilitiess
    document.getElementById('showTotalLiabilities').innerHTML = "₦" + totalLiabilities;
        
    return totalLiabilities;
}


function calculateNetWorth() {
    finalAssets = calculateAssets();
    finalLiabilities = calculateLiabilities();

    netWorth = finalAssets - finalLiabilities;
     netWorth = netWorth.toFixed(2);
     
     document.getElementById('showNetWorth').innerHTML = "₦"+ netWorth;
             
        return netWorth;
    
    }

    
    function sumUp() {
        let A = parseFloat(finalAssets);
        let L = parseFloat(finalLiabilities);
        sumAL = A + L;
        sumAL = sumAL.toFixed(2)
        
        
        percentageAsset();
        percentageLiabilities();
        
    }
    

    function percentageAsset() {
        let pAssets = (finalAssets / sumAL) * 100;
        pAssets = pAssets.toFixed(2);
        document.getElementById('assetPercentAssets').innerHTML = pAssets +"%";
       
    }

    function percentageLiabilities() {
        let pLiabilities = (finalLiabilities / sumAL) * 100;
        pLiabilities = pLiabilities.toFixed(2);
        document.getElementById('assetPercentLiabilities').innerHTML = pLiabilities + "%";
       
    }


 

