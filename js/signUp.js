function myFunction(message) {
	var x = document.getElementById("alert");
	document.getElementById('message').innerHTML = message;
	x.className = "show";
	setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
	}

function validateForm() {
	let firstName = document.forms["regForm"]["firstName"].value;
	let lastName = document.forms["regForm"]["lastName"].value;
	let email = document.forms["regForm"]["email"].value;
	let password = document.forms["regForm"]["password"].value;
	let confirmPassword = document.forms["regForm"]["confirmPassword"].value;

	if (firstName === "" || lastName === "") {
		myFunction('Name field is required!')
		return false
	}

	if (firstName.length <= 1 || lastName.length <= 1) {
		myFunction('Name must be morethan 2 characters!')
		return false
	}

	if (!email.includes('@')) {
		myFunction('Please use a valid email address!')
		return false
	}

	if (email === "") {
		myFunction('Email address is required!')
		return false
	}

	if (password != confirmPassword) {
		myFunction('Passwords do not match!')
		return false
	}

	if (password === "" || confirmPassword === "") {
		myFunction('Password fields are required')
		return false
	}
	
}