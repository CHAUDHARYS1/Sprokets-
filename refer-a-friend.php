<?php include('heading.php'); ?>
<style>
	#refer-a-friend {
		background-image: linear-gradient(71.89085632227182deg, rgba(237, 97, 255, 1) 30.089285714285715%, rgba(236, 96, 255, 1) 30.089285714285715%, rgba(93, 45, 255, 1) 74.13690476190476%);

	}

	.left-side-refer-a-friend {
		border: 2px solid white;

	}

	.invite-your-friends {
		width: 400px;
		margin: 0 auto;
		color: white;
	}

	.invite-your-friends p {
		color: white;
	}

	.refer-a-friend {
		width: 100%;
		background: white;
		border-radius: 0px;
		padding: 1rem;
	}

</style>
<div class="container-fluid mt-5 pb-5 pt-5" id="refer-a-friend">
	<div class="container pt-5 pb-5">

		<div class="row">
			<div class="col-md-6 text-center left-side-refer-a-friend">
				<div class="invite-your-friends p-5">
					<h2>Invite your <br>Friends</h2>
					<p><strong>Refer friends and get a $50 credit towards any products at our local stores.</strong></p>
					<p><small>At least 1 friend is required to signup if you want to earn out store credit.</small></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="refer-a-friend">
					<h5><strong>Invite your friends now.</strong><br></h5>
					<p><small>Go Ahead and send them an email from you!!</small></p>
				</div>
				<div id="refer-a-friend-mail">
					<div class="card card-body rounded-0">
						<?php
							if(isset($_POST['submit'])){
								$from = $_POST['from_email'];
								$to = $_POST['shitalchau10@gmail.com'];
								
								$message = $_POST['message'];
								$subject = "Riding the Fun";
								$header = "From: $from";
								mail($to,$subject,$message,$header);
							}
						?>
						<form action="" method="post" onsubmit="referFormValidation()">
							<div class="form-group">
								<label for="email" class="font-weight-bold" title="Email Address">YOUR EMAIL ADDRESS: *</label>
								<input type="email" class="form-control rounded-0" id="email" placeholder="Email" name="email">
								<span class="form-errors" id="emailError"></span>

							</div>
							<div class="form-group">
								<label for="friendEmail" class="font-weight-bold" title="Email Address">YOUR FRIENDS EMAIL: *</label>
								<input type="text" class="form-control rounded-0" id="friendEmail" placeholder="Email" name="Friend's Email">
								<span class="form-errors" id="friendEmailError"></span>

							</div>
							<div class="form-group">
								<label for="message" class="font-weight-bold" title="Email Address">MESSAGE: </label>
								<input type="textarea" class="form-control rounded-0" id="message" placeholder="Write something to your Friend . . ." name="message">
								<span class="form-errors" id="messageError"></span>

							</div>
							<button class="actual-button bg-dark text-white" type="submit" name="submit">Submit<i class="material-icons hoverable-icons">navigate_next</i></button>

						</form>

					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<div class="container mt-5 p-5 mb-5" id="blackBikeImage">
	<h1>MAMBA X</h1>
	<p>Pre-order yours today.</p>
	<button class="actual-button">Learn More<i class="material-icons hoverable-icons">navigate_next</i></button>
</div>
<script>
	function referFormValidation() {
		var email = document.getElementById('email');
		var friendEmail = document.getElementById('friendEmail');
		var message = document.getElementById('message');

		var emailValue = document.getElementById('email').value;
		var friendEmailValue = document.getElementById('friendEmail').value;
		var messageValue = document.getElementById('message').value;

		var emailError = document.getElementById('emailError');
		var friendEmailError = document.getElementById('friendEmailError');
		var messageError = document.getElementById('messageError');


		// EMAIL VALIDATION
		if (emailValue === "") {
			email.style.border = "2px solid red";
			email.placeholder = "INVALID EMAIL ADDRESS";
			emailError.innerHTML = "Email Required"
			event.preventDefault();
		} else {
			email.style.border = "2px solid green";
			emailError.innerHTML = "";
		}
		// friendEmail VALIDATION

		if (friendEmailValue === "") {
			friendEmail.style.border = "2px solid red";
			friendEmail.placeholder = "INVALID EMAIL ADDRESS";
			friendEmailError.innerHTML = "Friend's Email Required"
			event.preventDefault();
		} else {
			friendEmail.style.border = "2px solid green";
			friendEmailError.innerHTML = "";
		}
		// message VALIDATION

		if (messageValue === "") {
			message.style.border = "2px solid red";
			message.placeholder = "PLEASE WRITE A MESSAGE";
			messageError.innerHTML = "Please Write a Message"
			event.preventDefault();
		} else {
			message.style.border = "2px solid green";
			messageError.innerHTML = "";
		}
	}

</script>

<?php include('footer.php'); ?>
