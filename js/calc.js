const calcBtn = document.getElementById('calc-networth');
const cash = document.getElementById('cash');
const business = document.getElementById('real-estate');
const investment = document.getElementById('investment');
const savings = document.getElementById('savings');
const property = document.getElementById('property');
const assetsTotal = document.querySelector('.js--show-assets');
const liabilitiesTotal = document.querySelector('.js--show-liabilities');
const showNetworth = document.querySelector('.js--show-networth');
const debts = document.getElementById('debt');
const bills = document.getElementById('bills');

let tot

calcBtn.addEventListener('click', (e)=>{
    
    //quick validation
    if(cash.value === "" || business.value === "" || investment.value === "" || savings.value === "" || property.value === "" || debt.value === "" || bills.value === "") {
        alert('Provide values for all input fields');       
    } else {
        // Maths: calculate the inputs
    let totalAsset =  parseFloat(cash.value) + parseFloat(business.value) + parseFloat(investment.value) + parseFloat(savings.value) + parseFloat(property.value);

    // round up totalAsset to 2 decimal places
   totalAsset = totalAsset.toFixed(2);

    // display totalAsset 
   assetsTotal.innerHTML = "₦" + totalAsset;

   // Maths: calculate the inputs
   let totalLiabilities =  parseFloat(debts.value) + parseFloat(bills.value);
   totalLiabilities = totalLiabilities.toFixed(2);

   liabilitiesTotal.innerHTML = "₦" + totalLiabilities;

   let netWorth = totalAsset - totalLiabilities;
   netWorth = netWorth.toFixed(2);

   if (!isNaN(netWorth)) {
       showNetworth.innerHTML = "₦"+ netWorth;         
       }
    }

    
});

