<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/signUp.css">
	<title>Sign Up</title>
</head>
<body>
	<div>
		<div>
			<header>
				
			</header>
		</div>

		<div>
			<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#23C1CF;">
			  <a class="navbar-brand" href="#">Selene</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Our Team</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">About Us</a>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="search" placeholder="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: white; border: 1px solid white;">Search</button>
			    </form>
			  </div>
			</nav>
		</div>
		<div class="row">
		  <div class="col-sm-8">
		  
		  </div>

		  <div class="col-sm-4">
		  	<div style="text-align:center;">
					<span> Already have an account?<a href="login.php" style="color: #23C1CF; font-weight:bold"> Login</a></span>
				</div>
				<div style="text-align:center;">
					<h1 class="create-acc" style="color:#23C1CF;">Create Account</h1>
					<div>
						<p class="reg-p">You are a step away from knowing your financial worth.</p>
					</div>
					
				</div>
		  	<div id="regForm" align="center">
					<form name="regForm" action="" method="post" onsubmit="return validateForm()">
					<div id="alert">
						<p id="message"></p>
					</div>
					<div>
						<input type="text" name="firstName" placeholder="First Name" required>
					</div>

					<div>
						<input type="text" name="lastName" placeholder="Last Name" required>
					</div>

					<div>
						<input type="email" name="email" placeholder="Email" required>
					</div>

					<div>
						<input type="password" name="password" placeholder="Password" required>
					</div>

					<div>
						<input type="password" name="confirmPassword" placeholder="Confirm Password" required>
					</div>

					<div>
						<span><p>By registering, you agree to our <a href="#">Term & Conditions</a></p></span>
					</div>

					<div>
						<p id="error-message"></p>
            			<p id="success-message"></p>
					</div>

					<div>
						<input type="submit" name="submit" value="Create Account">
					</div>
				</form>
				</div>
			</div>
		</div>
		<footer class="page-footer font-small unique-color-dark">
		  <div class="container text-center text-md-left mt-5">

		    <div class="row mt-3">

		      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
		      	<h6 class="text-uppercase font-weight-bold">Subscribe To Our Newslater</h6>
		      	<div>
			        <form class="footer-contact">			        	
			         	<input type="email" name="sub-email" placeholder="Your Email" >
			         	<input type="submit" name="submit" value="Subscribe">
			        </form>
			      </div>
			  </div>
 
		      <!-- Grid column -->

		      <!-- Grid column -->
		      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

		        <!-- Links -->
		        <h6 class="text-uppercase font-weight-bold">Sponsors</h6>
		        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
		        <p>
		          <a href="#!">Hotel Ng</a>
		        </p>
		        <p>
		          <a href="#!">Flutterwave</a>
		        </p>
		        <p>
		          <a href="#!">Start Ng</a>
		        </p>
		        <p>
		          <a href="#!">Team Selene</a>
		        </p>

		      </div>
		      <!-- Grid column -->

		      <!-- Grid column -->
		      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

		        <!-- Links -->
		        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
		        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
		        <p>
		          <a href="#!">Login</a>
		        </p>
		        <p>
		          <a href="#!">Sign Up</a>
		        </p>
		        <p>
		          <a href="#!">About Us</a>
		        </p>
		        <p>
		          <a href="#!">Help</a>
		        </p>

		      </div>
		      <!-- Grid column -->

		      <!-- Grid column -->
		      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

		        <!-- Links -->
		        <h6 class="text-uppercase font-weight-bold">Address</h6>
		        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
		        <p>
		          <i class="fas fa-home mr-3"><img src="images/office.png" width="20" height="20"></i> Team Selene Com</p>
		        <p>
		          <i class="fas fa-envelope mr-3"><img src="images/mail.png" width="20" height="20"></i> info@example.com</p>
		        <p>
		          <i class="fas fa-phone mr-3"><img src="images/phone.png" width="20" height="20"></i> + 234 900 000 00</p>
		        <p>
		          <i class="fas fa-print mr-3"><img src="images/fax.png" width="20" height="20"></i> + 01 000 000 00</p>

		      </div>
		    </div>
		  </div>
		  <div>
		    <div class="container">
		      <div align="center" class="img-foot">		        
		          <h6>Connect with us on social networks!</h6>
		        <div class="col-md-6 col-lg-7 text-center">
		          <a class="fb-ic">
		            <i class="fab fa-facebook-f white-text mr-4"><img src="https://res.cloudinary.com/ros4eva/image/upload/v1566984764/facebook_mz3zyw.png"></i>
		          </a>
		          <a class="tw-ic">
		            <i class="fab fa-twitter white-text mr-4"><img src="https://res.cloudinary.com/ros4eva/image/upload/v1566984742/twitter_yvunur.png"></i>
		          </a>
		          <a class="gplus-ic" href="https://github.com/hngi/Team_Selene_Networth_Calculator/">
		            <i class="fab fa-github-g white-text mr-4"><img src="https://res.cloudinary.com/ros4eva/image/upload/v1566984708/github_x9sdlq.png"></i>
		          </a>
		          <a class="li-ic">
		            <i class="fab fa-linkedin-in white-text mr-4"><img src="https://res.cloudinary.com/ros4eva/image/upload/v1567084617/linkedin_x5cgkx.png" alt="linkedin"></i>
		          </a>

		        </div>
		      </div>

		    </div>
		  </div>
		  <div class="footer-copyright text-center py-3">&#169; 2019 Team Selene
		  </div>

		</footer>
	</div>

	<div>
		<script src="js/signUp.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</div>
	<?php
        if(isset($_POST["submit"]))
        {
            // check if user exist.
            $file = fopen("data.php","r");
            $findemail = false;
            while(!feof($file))
            {
                $line = fgets($file);
                $array = explode("|", $line);
                if(trim($array[1]) == $_POST['email'])
                {
                    $findemail = true;
                    break;
                }
            }
            fclose($file);


            if( $findemail )
            {
                echo "<script> document.getElementById('error-message').innerHTML = 'Email already exist, <a href=login.php>login </a> if you are existing user.'</script>";
                return "index.php";
            }

            else
            {
                $file = fopen("data.php", "a");
                fputs($file, "\r\nFirstname: ".$_POST["firstName"]. "Lastname: ".$_POST["lastName"]." Email: |".$_POST["email"]."| Password: |".$_POST["password"]."|");
                fclose($file);
				
				// echo "<script>alert('ok')</script>";
				echo "<script>alert('Success: Registration successful. Please login');window.location.href='login.php';</script>";
            }
        }
        else
        {
            return "index.php";
        }
        ?>
</body>
</html>
