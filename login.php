<?php 
    session_start();
    if(isset($_POST['Submit_Login'])) {
		include_once("includes/dbuser.php");
		$email = strip_tags($_POST['email']);
		$pwd = strip_tags($_POST['password']);
	
		$email = stripslashes($email);
		$pwd = stripslashes($pwd);	
		
		$email = mysqli_real_escape_string($lrconnect, $email);
		$pwd = mysqli_real_escape_string($lrconnect, $pwd);
			
		$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pwd'";

		$result = mysqli_query($lrconnect, $sql);
			if(mysqli_num_rows($result)==0) {
			$msg = '<p style="color:red;">Invalid Credentials!</p>';		
			}else { 
			$_SESSION['user'] = $email;
			$msg = '<p>Login Successfull!</p>';
			header("Location:membership/reports.php");
			}
			
	}
?>
<!doctype html>
<html lang="en">

<head>
	<title>Johnny Sprokets</title>
	<meta charset="utf-8">
	<meta property="og:image" content="JS">
	<meta property="og:type" content="website">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Hi my name is Shital and I am a web designer and front-end developer with expertise in creating visually appealing, functional, user-friendly websites and marketing materials. Dedicated to driving innovation through the production of exciting websites utilizing an array of scripting languages and multimedia web tools. Proven knowledge and understanding of continuous development models to contribute to the success of web development projects. ">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="image/png" sizes="1080x988" href="images/favicon-01.png">
	<link rel="icon" type="image/png" sizes="1080x988" href="images/favicon-01.png">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="https://use.typekit.net/may4jjf.css">
	<script src="js/modernizr.js"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

	<style>
		.login-body {
			background: white;
			background-repeat: no-repeat;
			min-height: 100vh;
			margin-top: 5rem;
		}

		.login-logo {
			width: 400px;
			margin: 0 auto;
			background: white;
			padding: 1rem;
			border-bottom-left-radius: 5px;
			border-bottom-right-radius: 5px;
		}

		.login-logo-two {
			text-align: center;
		}


		.login-form {
			width: 400px;
			margin: 0 auto;
			background: white;
			border: 2px solid #5D2DFF;
			border-radius: 5px;
			margin-top: .4%;
			padding-bottom: 1rem;


		}

		.login-form form input:focus {
			border: 2px solid #5D2DFF;

		}

	</style>

</head>

<body class="login-body">


	<div class="login-form">
		<div class="pt-4 text-right mr-4">
			<div class="login-logo-two">
				<img src="images/logo.png" height="20" alt="Johhny Sprokets Logo">
			</div>
		</div>
		<div class="login-header p-4 text-center">
			<h5 class="m-0 font-weight-bold">Welcome Back!</h5>
			<p class="text-dark"><small>Please login to your account</small></p>
		</div>
		<form class="pl-4 pr-4 pb-4" id="loginForm" method="post" onsubmit="return loginValidation()" action="<?php $_SERVER['PHP_SELF']; ?>">
			<!--  onsubmit="loginValidation()" -->
			<!--  action=" // ## " -->
			<!--  -->
			<span class="form-errors" id="loginError"></span>

			<div class="form-group">
				<label for="email" class="font-weight-bold" title="email">EMAIL ADDRESS: *</label>
				<div class="d-flex">
					<i class="material-icons p-1 bg-light border border-right-0">email</i>
					<input type="text" class="form-control rounded-0" id="email" name="email" autofocus>
				</div>
				<span class="form-errors" id="emailError"></span>

			</div>
			<div class="form-group">
				<label for="password" class="font-weight-bold" title="password">PASSWORD: *</label>
				<div class="d-flex">
					<i class="material-icons p-1 bg-light border border-right-0">security</i>
					<input type="password" class="form-control rounded-0 passsword-input" id="password" name="password">
				</div>
				<span id="capsLockWarning" class="form-errors caps-lock-error"><i class="material-icons icons">warning</i>CAPS LOCK IS ON</span>
				<span class="form-errors" id="passwordError"></span>

				<div class="text-right">
					<p><input type="checkbox" onclick="showHidePassword()" id="showHidePass">
						<small id="showPasswordChange">Show Password</small></p>
				</div>

				<?php if(isset($msg)) {echo '<p><span class="form-errors">'.$msg.'</span></p>';} ?>

			</div>
			<div class="form-row">
				<div class="form-group col">
					<input type="checkbox" name="rememberme" id="rememberMe">
					<label for="rememberMe">
						<p><small>Remember me</small></p>
					</label>
				</div>
				<div class="form-group col text-right">
					<p><a href="#"><small class="text-dark font-weight-bold">Forgot your password?</small></a></p>
				</div>
			</div>
			<div class="form-group text-center">
				<button type="submit" class="actual-button bg-dark text-light" title="Login" name="Submit_Login">LOGIN<i class="material-icons hoverable-icons">navigate_next</i></button>
			</div>


			<div class="form-group text-center">
				<p style="line-height:1.2rem;"><small>Don't have an Account?</small><br><a href="register"><small class="text-dark font-weight-bold"><u>Create your account for free</u></small></a></p>
			</div>

		</form>

		<div class="text-center">
			<p style="line-height:1rem; color:grey;font-size:16px;"><small>By signing up, you agree to Sprokets bike's
					<br><strong class="text-dark">Terms and Conditions</strong> & <strong class="text-dark">Privacy Policy</strong></small></p>
		</div>
	</div>
	<script>
		// Validating the login form
		function loginValidation() {
			// Getting the input
			var email = document.getElementById('email');
			var password = document.getElementById('password');

			// Getting the input values
			var emailValue = document.getElementById('email').value;
			var passwordValue = document.getElementById('password').value;

			// Getting the error displayers
			var emailError = document.getElementById("emailError");
			var passwordError = document.getElementById("passwordError");

			// Validation for email
			var atposition = emailValue.indexOf("@");
			var dotposition = emailValue.lastIndexOf(".");


			// Email Address Validation 
			if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= emailValue.length) {
				email.style.border = "2px solid red";
				emailError.innerHTML = "Email Required"
				event.preventDefault();
			} else {
				email.style.border = "2px solid green";
				emailError.innerHTML = "";
			}
			// PASSWORD VALIDATION
			if (passwordValue === "") {
				password.style.border = "2px solid red";
				passwordError.innerHTML = "Invalid Password"
				event.preventDefault();
			} else {
				password.style.border = "2px solid green";
				passwordError.innerHTML = "";
			}

		}
		// Show or hide password feature for login page
		function showHidePassword() {
			var password = document.getElementById("password");
			var showPass = document.getElementById("showHidePass");
			var showPassTxt = document.getElementById("showPasswordChange");
			if (password.type === "password") {
				password.type = "text";
			} else {
				password.type = "password";
			}
			if (showPass.checked == true) {
				showPassTxt.innerHTML = "Hide Password";
			} else {
				showPassTxt.innerHTML = "Show Password";
			}
		}
		// Check if caps lock is active on password only
		var password = document.getElementById("password");
		var capsLockWarning = document.getElementById("capsLockWarning");
		password.addEventListener("keyup", function(event) {

			if (event.getModifierState("CapsLock")) {
				capsLockWarning.style.display = "block";
			} else {
				capsLockWarning.style.display = "none"
			}
		});

	</script>
</body>


</html>
