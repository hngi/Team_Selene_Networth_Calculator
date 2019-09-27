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
        // alert(total);
    
        totalLiabilities = totalLiabilities.toFixed(2);
    
    document.getElementById("showTotalLiabilities").innerHTML = "N"+totalLiabilities;
}

