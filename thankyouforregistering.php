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

		/**/

	</style>

</head>

<body class="register-form-body" onload="timerStart()">
	<div class="container">
		<div class="register-form">
			<div class="pt-4 text-right mr-4">
				<div class="login-logo-two">
					<img src="images/logo.png" height="20" alt="Johhny Sprokets Logo">
				</div>
			</div>
			<div class="p-4 text-center">
				<h5 class="m-0 font-weight-bold">Thank you!</h5>
				<p class="text-dark"><small>for signing up! You won't regret it</small></p>
			</div>
			<div class="text-center">
				<p>You will be automatically<br> redirected to another page in:</p>
				<h2 id="countdowntimer">10</h2>
				<p><small>or click here to go to the <a href="login"><u>login page</u></a></small></p>
			</div>
			<div class="text-center">
				<p style="line-height:1rem; color:grey;font-size:16px;"><small>By signing up, you agree to Sprokets bike's<br><strong class="text-dark">Terms and Conditions</strong> & <strong class="text-dark">Privacy Policy</strong></small></p>
			</div>
		</div>
	</div>
	<script>
		var timeleft = 10;
		var downloadTimer = setInterval(function() {
			timeleft--;
			document.getElementById("countdowntimer").textContent = timeleft;
			if (timeleft <= 0)
				location.replace("login.php");

		}, 1000);

	</script>
</body>

</html>
