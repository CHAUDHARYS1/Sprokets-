 <?php require_once('includes/dbuser.php');?>
 <?php 
if(isset($_POST['submit_register'])){
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$emailAddress = $_POST['email'];
	$addressOne = $_POST['addressone'];
	$addressTwo = $_POST['addresstwo'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];
	$phoneNum = $_POST['phone'];
	$distance = $_POST['distance'];
	
	include ('includes/dbuser.php');
		$signupMembers = mysqli_query($lrconnect,"INSERT INTO `runner`(`fname`, `lname`, `email`, `address1`, `address2`, `city`, `state`, `postalcode`, `phone`, `distance`) VALUES ('$firstName','$lastName','$emailAddress','$addressOne','$addressTwo','$city','$state','$zipcode','$phoneNum','$distance')");
		if($signupMembers){
			header("Location:thanku.php");
		} else{
		$error_msg = mysqli_error($lrconnect); 
		$msg = "There is an error: $error_msg";	
		}
	
}


?>
 <?php include('heading.php'); ?>
 <style>
 	#signupPage {
 		background-image: url('images/signup-bg.jpg');
 		background-position: right;
 		background-repeat: no-repeat;
 		background-size: cover;

 	}

 	#signupForm {
 		background: rgb(255, 255, 255);
 	}

 	#eventForm input:focus {
 		background: #5D2DFF;
 		color: white;
 	}

 	#eventForm input[type=text] {
 		font-weight: bold;
 	}

 	#eventForm input[type=number] {
 		font-weight: bold;
 	}


 	#eventForm input::-webkit-input-placeholder {
 		/* Chrome/Opera/Safari */
 		color: #C0C0C0;
 		font-weight: normal;
 	}

 	::-moz-placeholder {
 		/* Firefox 19+ */
 		color: #C0C0C0;
 		font-weight: normal;
 	}

 	:-ms-input-placeholder {
 		/* IE 10+ */
 		color: #C0C0C0;
 		font-weight: normal;
 	}

 	:-moz-placeholder {
 		/* Firefox 18- */
 		color: #C0C0C0;
 		font-weight: normal;
 	}

 </style>

 <!-- INSERT INTO `runner`(`fname`, `lname`, `email`, `address1`, `address2`, `city`, `state`, `postalcode`, `phone`, `distance`) VALUES ('shital','chaudhary','shitalchau10@gmail.com','5844 N Paulina St','Unit C','Chicago','IL','60660','2244105089','5k'); -->
 <div class="container-fluid" id="signupPage">
 	<div class="container pt-5 pb-5">
 		<div class="row mt-5">

 			<div class="col-md-6 shadow border" id="signupForm">
 				<div class="p-4">
 					<p><a href="index.php"><i class="material-icons">chevron_left</i>Go Back</a> </p>
 					<h2>Are you ready?</h2>
 					<h6 class="pl-2 pr-2">Register to attend our event at free of charge. <strong>Just Bring Your Bike and Get Ridin'.</strong></h6>


 				</div>
 				<div>
 					<?php {echo $confirm;} ?>
 				</div>
 				<form class="p-4" id="eventForm" method="post" onsubmit="return formValidation()" action="<?php $_SERVER['PHP_SELF']; ?>">
 					<!-- -->
 					<!--  action=" // ## <?php ## $_SERVER['PHP_SELF']; ?>" -->
 					<div class="form-row">
 						<div class="form-group col-md-6">
 							<label for="firstName" class="font-weight-bold" title="First Name">FIRST NAME: *</label>
 							<input type="text" class="form-control rounded-0 " id="firstName" placeholder="First Name" name="firstname" autofocus>
 							<span class="form-errors" id="firstNameError"></span>
 						</div>
 						<div class="form-group col-md-6">
 							<label for="lastName" class="font-weight-bold" title="Last Name">LAST NAME: *</label>
 							<input type="text" class="form-control rounded-0 " id="lastName" placeholder="Last Name" name="lastname">
 							<span class="form-errors" id="lastNameError"></span>
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="email" class="font-weight-bold" title="Email Address">EMAIL ADDRESS: *</label>
 						<input type="text" class="form-control rounded-0 " id="email" placeholder="Email" name="email">
 						<span class="form-errors" id="emailError"></span>

 					</div>
 					<div class="form-group">
 						<label for="addressOne" class="font-weight-bold" title="Address">ADDRESS: *</label>
 						<input type="text" class="form-control rounded-0 " id="addressOne" placeholder="Address" name="addressone">
 						<span class="form-errors" id="addressError"></span>

 					</div>
 					<div class="form-group">
 						<label for="addressTwo" class="font-weight-bold" title="Address Two">ADDRESS 2: </label>
 						<input type="text" class="form-control rounded-0 " id="addressTwo" placeholder="Unit/Apt" name="addresstwo">

 					</div>

 					<div class="form-row">

 						<div class="form-group col-md-4">
 							<label for="city" class="font-weight-bold" title="City">CITY: *</label>
 							<input type="text" class="form-control rounded-0 " id="city" value="CHICAGO" name="city">
 							<span class="form-errors" id="cityError"></span>

 						</div>

 						<div class="form-group col-md-4">
 							<label for="state" class="font-weight-bold" title="State">STATE: *</label>
 							<input type="text" class="form-control rounded-0 " id="state" value="IL" name="state" maxlength="2">
 							<span class="form-errors" id="stateError"></span>

 						</div>
 						<div class="form-group col-md-4">
 							<label for="zipCode" class="font-weight-bold" title="Zipcode">ZIPCODE: *</label>
 							<input type="number" class="form-control rounded-0 " id="zipCode" name="zipcode" maxlength="5" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
 							<span class="form-errors" id="zipcodeError"></span>

 						</div>
 					</div>
 					<p><strong>NOTE: </strong><small>By Default, The City and State are Selected</small></p>
 					<div class="form-row">
 						<div class="form-group col-md-6">
 							<label for="phoneNumber" class="font-weight-bold" title="Phone Number">PHONE NUMBER: *</label>
 							<input type="text" class="form-control rounded-0 " id="phoneNumber" name="phone">
 							<span class="form-errors" id="phoneError"></span>

 						</div>
 						<div class="form-group col-md-6">
 							<label for="distance" class="font-weight-bold" title="Distance">DISTANCE: *</label>
 							<select type="radio" class="form-control rounded-0 " id="distance" name="distance">
 								<option value="1k">1K</option>
 								<option value="5k" selected>5K</option>
 								<option value="10k">10K</option>
 							</select>
 						</div>
 					</div>
 					<button type="button" class="actual-button bg-light border float-left" onclick="resetFunction()">Reset<i class="material-icons hoverable-icons">refresh</i></button>

 					<button type="submit" class="actual-button bg-dark text-light float-right mb-4" title="Submit form" name="submit_register">Register<i class="material-icons hoverable-icons">navigate_next</i></button>

 				</form>
 				<?php if(isset($msg)){echo $msg;}?>

 			</div>

 		</div>
 	</div>
 </div>

 <script>
 	function resetFunction() {
 		document.getElementById(" eventForm").reset();
 		location.reload();
 	}

 	function formValidation() {
 		var firstName = document.getElementById("firstName");
 		var lastName = document.getElementById("lastName");
 		var email = document.getElementById("email");
 		var addressOne = document.getElementById("addressOne");
 		var addressTwo = document.getElementById("addressTwo");
 		var city = document.getElementById("city");
 		var state = document.getElementById("state");
 		var zipcode = document.getElementById("zipCode");
 		var phoneNumber = document.getElementById("phoneNumber");
 		var distance = document.getElementById("oneMile");
 		var firstNameValue = document.getElementById("firstName").value;
 		var lastNameValue = document.getElementById("lastName").value;
 		var emailValue = document.getElementById("email").value;
 		var addressOneValue = document.getElementById("addressOne").value;
 		var addressTwoValue = document.getElementById("addressTwo").value;
 		var cityValue = document.getElementById("city").value;
 		var stateValue = document.getElementById("state").value;
 		var zipcodeValue = document.getElementById("zipCode").value;
 		var phoneNumberValue = document.getElementById("phoneNumber").value;
 		var atposition = emailValue.indexOf("@");
 		var dotposition = emailValue.lastIndexOf(".");
 		var firstNameError = document.getElementById("firstNameError");
 		var lastNameError = document.getElementById("lastNameError");
 		var emailError = document.getElementById("emailError");
 		var addressError = document.getElementById("addressError");
 		var cityError = document.getElementById("cityError");
 		var stateError = document.getElementById("stateError");
 		var zipcodeError = document.getElementById("zipcodeError");
 		var phoneError = document.getElementById("phoneError");
 		// First Name Validation 
 		if (firstNameValue === "") {
 			firstName.style.border = "2px solid red";
 			firstName.placeholder = "INVALID FIRST NAME";
 			firstNameError.innerHTML = "First Name Required"
 			event.preventDefault();
 		} else {
 			firstName.style.border = "2px solid green";
 			firstNameError.innerHTML = "";
 		}
 		// Last Name Validation 
 		if (lastNameValue === "") {
 			lastName.style.border = "2px solid red";
 			lastName.placeholder = "INVALID LAST NAME";
 			lastNameError.innerHTML = "Last Name Required"
 			event.preventDefault();
 		} else {
 			lastName.style.border = "2px solid green";
 			lastNameError.innerHTML = "";
 		}
 		// Email Address Validation 
 		if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= emailValue.length) {
 			email.style.border = "2px solid red";
 			email.placeholder = "INVALID EMAIL ADDRESS";
 			emailError.innerHTML = "Email Required"

 			event.preventDefault();
 		} else {
 			email.style.border = "2px solid green";
 			emailError.innerHTML = "";

 		}
 		// Address One Validation

 		if (addressOneValue === "") {
 			addressOne.style.border = "2px solid red";
 			addressOne.placeholder = "INVALID ADDRESS";
 			addressError.innerHTML = "Address Required"

 			event.preventDefault();
 		} else {
 			addressOne.style.border = "2px solid green";
 			addressError.innerHTML = "";

 		}
 		// City Validation

 		if (cityValue === "") {
 			city.style.border = "2px solid red";
 			city.placeholder = "Invalid Name";
 			cityError.innerHTML = "City Name Required"
 			event.preventDefault();
 		} else {
 			city.style.border = "2px solid green";
 			cityError.innerHTML = "";

 		}
 		// state Validation

 		if (stateValue === "") {
 			state.style.border = "2px solid red";
 			state.placeholder = "INVALID STATE";
 			stateError.innerHTML = "State Name Required"

 			event.preventDefault();
 		} else {
 			state.style.border = "2px solid green";
 			stateError.innerHTML = "";

 		}
 		// zipcode Validation

 		if (zipcodeValue === "") {
 			zipcode.style.border = "2px solid red";
 			zipcode.placeholder = "INVALID ZIPCODE";
 			zipcodeError.innerHTML = "Zipcode Required"

 			event.preventDefault();
 		} else {
 			zipcode.style.border = "2px solid green";
 			zipcodeError.innerHTML = "";

 		}
 		// phoneNumber Validation


 		if (phoneNumberValue === "") {
 			phoneNumber.style.border = "2px solid red";
 			phoneNumber.placeholder = "INVALID PHONE NUMBER";
 			phoneError.innerHTML = "Phone Number Required"

 			event.preventDefault();
 		} else {
 			phoneNumber.style.border = "2px solid green";
 			firstNameError.innerHTML = "";
 			phoneError.innerHTML = "";

 		}


 		return true;
 	}

 </script>
 <?php include('footer.php') ?>
