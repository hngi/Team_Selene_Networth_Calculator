function onSuccess(googleUser) {
    console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    console.log(googleUser.getBasicProfile());

    const userProperties = {
        username: googleUser.getBasicProfile().getEmail()
    } 

    // saveObject(userProperties.username, userProperties);

    saveObject('currentlyLoggedInUser', userProperties);

    window.location.href = window.location.href.replace('sign-in.php', 'dashboard.php');
  }
  function onFailure(error) {
    console.log(error);
  }
  function renderButton() {
    gapi.signin2.render('my-signin2', {
      'scope': 'profile email',
      'width': 250,
      'height': 50,
      'longtitle': true,
      'theme': 'dark',
      'onsuccess': onSuccess,
      'onfailure': onFailure
    });
  }