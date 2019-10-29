<?php 
if(isset($_POST['Submit_Register'])) { 
	$email = $_POST['email']; 
	$pwd = ($_POST['password']); 
	$cpwd = ($_POST['confirm_password']);
	include('includes/dbuser.php'); 
	$sql = "INSERT INTO users (email, password, confirm_password) VALUES ('$email', '$pwd','$cpwd')";
	$result = mysqli_query($lrconnect, $sql);
	if($result) { 
		/*$msg = "<p><strong>Thank you for signing up with us!</strong>"; 
		$msg .= "<br><a href='admin_login.php'>Login Page</a></p>"; */
			header("Location:thankyouforregistering.php");

		 		}else{ 
		$error_msg = mysqli_error($lrconnect); 
		$msg = "There is an error: $error_msg";
		} // end else 
} // end if
?>
<!doctype html>
<html lang="en">

<head>
	<title>Johnny Sprokets</title>
	<meta charset="utf-8">
	<meta property="og:image" content="JS">
	<meta property="og:type" content="website">
	<meta name="viewport" content="width=device-width, i passsword-inputnitial-scale=1, shrink-to-fit=no">
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
		.register-form-body {
			background: white;
			background-repeat: no-repeat;
			min-height: 100vh;
			margin-top: 5rem;
		}

		.register-logo-two {
			text-align: center;
		}

		.register-form {
			width: 400px;
			background: white;
			border-radius: 5px;
			border: 2px solid #5D2DFF;
			margin: 0 auto;
			margin-top: .4%;
		}

		.register-form form input:focus {
			border: 2px solid #5D2DFF;

		}

		/**/

	</style>

</head>

<body class="register-form-body">
	<div class="container">


		<div class="register-form">
			<div class="pt-4 text-right mr-4">
				<div class="login-logo-two">
					<img src="images/logo.png" height="20" alt="Johhny Sprokets Logo">
				</div>
			</div>
			<div class="login-header p-4 text-center">
				<h5 class="m-0 font-weight-bold">Register</h5>
				<p class="text-dark"><small>Signup for memebership today!</small></p>
			</div>
			<form class="pl-4 pr-4 pb-4" method="post" onsubmit="return registerValidation()" action="<?php $_SERVER['PHP_SELF'];?>">
				<div class="form-group">
					<label for="email" class="font-weight-bold" title="Email Address">EMAIL ADDRESS: *</label>
					<div class="d-flex">
						<i class="material-icons p-1 bg-light border border-right-0">email</i>
						<input type="text" class="form-control rounded-0" id="email" name="email" autofocus>
					</div>
					<span class="form-errors" id="emailError"></span>
				</div>
				<div class="form-group">
					<label for="pwd" class="font-weight-bold" title="Password">PASSWORD: *</label>
					<div class="d-flex">
						<i class="material-icons p-1 bg-light border border-right-0">security</i>
						<input type="password" class="form-control rounded-0 passsword-input" id="pwd" name="password">
					</div>
					<span id="capsLockWarning" class="form-errors caps-lock-error"><i class="material-icons icons">warning</i>CAPS LOCK IS ON</span>

					<span class="form-errors" id="passwordError"></span>
				</div>
				<div class="form-group">
					<label for="cpwd" class="font-weight-bold" title="Confirm Password">CONFIRM PASSWORD: *</label>
					<div class="d-flex">
						<i class="material-icons p-1 bg-light border border-right-0">security</i>
						<input type="password" class="form-control rounded-0 passsword-input" id="cpwd" name="confirmPassword">
					</div>
					<span id="capsLockWarningTwo" class="form-errors caps-lock-error"><i class="material-icons icons">warning</i>CAPS LOCK IS ON</span>
					<p><span class="form-errors" id="conPasswordError"></span></p>
					<p><span class="form-errors" id="confirmPasswordError"></span></p>
					<div class="text-right">
						<p><input type="checkbox" onclick="showHidePassword()" id="showHidePass">
							<small id="showPasswordChange">Show Password</small></p>
					</div>


				</div>
				<div class="form-row">
					<div class="form-group col">
						<input type="checkbox" name="rememberme" id="rememberMe">
						<label for="rememberMe">
							<p><small>Remember me</small></p>
						</label>
					</div>
					<div class="form-group col text-right">
						<p><a href="#"><small class="text-dark font-weight-bold">Have a question?</small></a></p>
					</div>
				</div>
				<div class="form-group text-center">
					<button type="submit" class="actual-button bg-dark text-light" title="Login" name="Submit_Register">REGISTER<i class="material-icons hoverable-icons">navigate_next</i></button>
				</div>

				<div class="form-group text-center">
					<p style="line-height:1.2rem;"><small>Already have an Account?</small><br><a href="login"><small class="text-dark font-weight-bold"><u>Sign in to your account</u></small></a></p>
				</div>
				<?php if(isset($msg)) {echo $msg."<br>";} ?>

			</form>
			<div class="text-center">
				<p style="line-height:1rem; color:grey;font-size:16px;"><small>By signing up, you agree to Sprokets bike's<br><strong class="text-dark">Terms and Conditions</strong> & <strong class="text-dark">Privacy Policy</strong></small></p>
			</div>

		</div>
	</div>
	<script>
		function registerValidation() {
			// Getting the input
			var email = document.getElementById('email');
			var password = document.getElementById('pwd');
			var conPassword = document.getElementById('cpwd');

			// Getting the input values
			var emailValue = document.getElementById('email').value;
			var passwordValue = document.getElementById('pwd').value;
			var conPasswordValue = document.getElementById('cpwd').value;

			// Getting the error displayers
			var emailError = document.getElementById("emailError");
			var passwordError = document.getElementById("passwordError");
			var conPasswordError = document.getElementById("conPasswordError");

			var confirmPasswordError = document.getElementById("confirmPasswordError");

			// Validation for email
			var atposition = emailValue.indexOf("@");
			var dotposition = emailValue.lastIndexOf(".");


			// Email Address Validation 
			if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= emailValue.length) {
				email.style.border = "2px solid red";
				emailError.innerHTML = "Invalid email address";
				event.preventDefault();
			} else {
				email.style.border = "2px solid green";
				emailError.innerHTML = "";
			}

			// PASSWORD VALIDATION
			if (passwordValue === "") {
				password.style.border = "2px solid red";
				passwordError.innerHTML = "No value in password field";
				event.preventDefault();
			} else {
				passwordError.innerHTML = "";
			}

			// CONFIRM PASSWORD VALIDATION
			if (conPasswordValue === "") {
				conPassword.style.border = "2px solid red";
				conPasswordError.innerHTML = "No value in password field";
				event.preventDefault();
			} else {
				conPasswordError.innerHTML = "";
			}

			// PASSWORD DO NOT MATCH VALIDATION
			if (passwordValue != conPasswordValue) {
				password.style.border = "2px solid red";
				conPassword.style.border = "2px solid red";
				confirmPasswordError.innerHTML = "Passwords do not match";
				event.preventDefault();
			} else if (passwordValue.length < 6) {
				passwordError.innerHTML = "Password must be greater than 6 characters.";

			} else {
				confirmPasswordError.innerHTML = "";
				password.style.border = "2px solid green";
				conPassword.style.border = "2px solid green";
			}
		}
		// Show or hide password feature for register page

		function showHidePassword() {
			var password = document.getElementById("pwd");
			var conPassword = document.getElementById("cpwd");
			var showPass = document.getElementById("showHidePass");
			var showPassTxt = document.getElementById("showPasswordChange");
			if (password.type === "password" && conPassword.type === "password") {
				password.type = "text";
				conPassword.type = "text";
			} else {
				password.type = "password";
				conPassword.type = "password";
			}
			if (showPass.checked == true) {
				showPassTxt.innerHTML = "Hide Password";
			} else {
				showPassTxt.innerHTML = "Show Password";
			}
		}
		// Check if caps lock is active on password  and confirm password field only

		var password = document.getElementById("pwd");
		var conPassword = document.getElementById("cpwd");
		var capsLockWarning = document.getElementById("capsLockWarning");
		var capsLockWarningTwo = document.getElementById("capsLockWarningTwo");
		password.addEventListener("keyup", function(event) {

			if (event.getModifierState("CapsLock")) {
				capsLockWarning.style.display = "block";
			} else {
				capsLockWarning.style.display = "none";
			}
		});
		conPassword.addEventListener("keyup", function(event) {

			if (event.getModifierState("CapsLock")) {
				capsLockWarningTwo.style.display = "block";
			} else {
				capsLockWarningTwo.style.display = "none";
			}
		});

	</script>
</body>

</html>
