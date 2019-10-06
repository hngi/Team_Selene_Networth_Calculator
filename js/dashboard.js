console.log('name');

const currentlyLoggedInUser = getObject('currentlyLoggedInUser');
if(currentlyLoggedInUser == null){
    window.location.href = window.location.href.replace('dashboard.php', 'sign-in.php');
}

const currentUserEmailElement = document.getElementById('currentUserEmail');
console.log('currentUserEmailElement', currentUserEmailElement);
currentUserEmailElement.innerText = currentlyLoggedInUser.username;

function logout() {
    const auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
}

const dashboard = document.querySelector('.dashboard__right__contents');
const worth = document.querySelector('.networth__wrapper');
// dashboard.style.display = "block";
// worth.style.display = "none";
  
showDashboard = function(){
    const dashboard = document.querySelector('.dashboard__right__contents');
    const worth = document.querySelector('.networth__wrapper');
    dashboard.style.display = "block";
    worth.style.display = "none";
    hideSideNav();
}

// showAssets = function(){
//     const dashboard = document.querySelector('.dashboard__right__contents');
//     const asset = document.querySelector('.assets__wrapper');
//     const liablities = document.querySelector('.liabilities__wrapper');
//     const worth = document.querySelector('.networth__wrapper');
//     dashboard.style.display = 'none';
//     asset.style.display = 'block';
//     liablities.style.display = "none";
//     worth.style.display = "none";
//     hideSideNav();
// }
// showLiabilities = function(){
//     const dashboard = document.querySelector('.dashboard__right__contents');
//     const asset = document.querySelector('.assets__wrapper');
//     const liablities = document.querySelector('.liabilities__wrapper');
//     const worth = document.querySelector('.networth__wrapper');
//     dashboard.style.display = 'none';
//     asset.style.display = 'none';
//     worth.style.display = "none";
//     liablities.style.display = "block";
//     hideSideNav();
// }
showWorth = function(){
    const dashboard = document.querySelector('.dashboard__right__contents');
    const worth = document.querySelector('.networth__wrapper');
    dashboard.style.display = 'none';
    worth.style.display = "block";
    hideSideNav();
}

//Function to display the left dashboard
showDashboardLeft = function(){
    const leftDashboard = document.querySelector('.dashboard__left');
    leftDashboard.style.display = "block";
    hideSideNav();
}

//Function to hide side nav
hideSideNav = function(){
    const leftDashboard = document.querySelector('.dashboard__left');
    leftDashboard.classList.toggle('hide__sidebar');
}