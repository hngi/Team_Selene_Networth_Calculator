showDashboard = function(){
    const dashboard = document.querySelector('.dashboard__right__contents');
    const asset = document.querySelector('.assets__wrapper');
    const liablities = document.querySelector('.liabilities__wrapper');
    const worth = document.querySelector('.networth__wrapper');
    dashboard.style.display = "block";
    asset.style.display = "none";
    liablities.style.display = "none";
    worth.style.display = "none";
}

showAssets = function(){
    const dashboard = document.querySelector('.dashboard__right__contents');
    const asset = document.querySelector('.assets__wrapper');
    const liablities = document.querySelector('.liabilities__wrapper');
    const worth = document.querySelector('.networth__wrapper');
    dashboard.style.display = 'none';
    asset.style.display = 'block';
    liablities.style.display = "none";
    worth.style.display = "none";
}
showLiabilities = function(){
    const dashboard = document.querySelector('.dashboard__right__contents');
    const asset = document.querySelector('.assets__wrapper');
    const liablities = document.querySelector('.liabilities__wrapper');
    const worth = document.querySelector('.networth__wrapper');
    dashboard.style.display = 'none';
    asset.style.display = 'none';
    worth.style.display = "none";
    liablities.style.display = "block";
}
showWorth = function(){
    const dashboard = document.querySelector('.dashboard__right__contents');
    const asset = document.querySelector('.assets__wrapper');
    const liablities = document.querySelector('.liabilities__wrapper');
    const worth = document.querySelector('.networth__wrapper');
    dashboard.style.display = 'none';
    asset.style.display = 'none';
    liablities.style.display = "none";
    worth.style.display = "block";
}