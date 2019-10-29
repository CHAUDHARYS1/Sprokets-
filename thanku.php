<?php include('heading.php');?>
<style>
	body {}

	#thanksYouAreBooked {
		background: #f7f7f7;
	}

	#thanksYouAreBooked .booked {
		text-align: left;
		color: black;
	}

	#thanksYouAreBooked .booked p {
		color: black;
		line-height: ;
	}

	.booked-confirmation {
		width: 500px;
	}

	.booked .or {
		font-size: 2rem;
		letter-spacing: normal;
		padding-left: 2rem;
		padding-right: 2rem;
		font-weight: bold;
	}

	#inviteAFriend {
		text-align: center;
		width: 500px;
		color: white;
		border: 2px solid black;
		background: white;
		padding: 2rem;
		margin-top: 4rem;
		background-image: linear-gradient(71.89085632227182deg, rgba(237, 97, 255, 1) 30.089285714285715%, rgba(236, 96, 255, 1) 30.089285714285715%, rgba(93, 45, 255, 1) 74.13690476190476%);
	}

	#inviteAFriend p {
		color: white !important;
	}

</style>
<div class="container-fluid" id="thanksYouAreBooked">
	<div class="container mt-5">
		<div class="row booked mt-5 pt-5 pb-5">
			<div class="col">
				<p> <a class="font-weight-bold logo" href="index">JOHNNY SPROCKETS</a></p>
				<h5 class="font-weight-bold">Thanks! You're booked.</h5>
				<div class="booked-confirmation">
					<p>An confirmation email has been sent to your provided email address. Our special team @sprokets will be looking at your application and will contact you if there are any questions or concerns.</p>
					<p>If you have any questions, concerns or comments, please don't hesistate to contact us at:</p>
					<p>(224) 410-5421 <span class="or">OR</span> sprockets@gmail.com</p>
				</div>
			</div>
			<div class="col">
				<div id="inviteAFriend">
					<h5 class="font-weight-bold">Invite Your Friend</h5>
					<p><strong>Refer friends and get a $50 credit towards any products at our local stores.</strong></p>
					<a href="refer-a-friend.php"><button class="actual-button bg-dark text-white">Invite A Friend<i class="material-icons hoverable-icons">navigate_next</i></button></a>
				</div>
			</div>

		</div>
	</div>
</div>
<div class="mt-5 mb-5">
	<div class="container">
		<div>
			<h2>BEST SELLERS</h2>
			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
		</div>
		<div class="row">
			<div class="col">

				<div>
					<img src="images/image-three.png" alt="">
					<p><span class="span-two">SPECIALIZED ALLEZ</span></p>

					<div class="row">
						<div class="col">
							<p class="price">$200</p>
						</div>
						<div class="col-auto">
							<i class="material-icons stars">star</i>
							<i class="material-icons stars">star</i>
							<i class="material-icons stars">star</i>
							<i class="material-icons stars">star</i>
							<i class="material-icons stars">star_half</i>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div><img src="images/image-four.png" alt="">
					<p><span class="span-two">SPECIALIZED ALLEZ</span></p>

					<div class="row">
						<div class="col">
							<p class="price">$200</p>
						</div>
						<div class="col-auto">
							<i class="material-icons stars">star</i>
							<i class="material-icons stars">star</i>
							<i class="material-icons stars">star</i>
							<i class="material-icons stars">star</i>
							<i class="material-icons stars">star_half</i>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div>
					<img src="images/image-five.png" alt="">
					<p><span class="span-two">SPECIALIZED ALLEZ</span></p>

					<div class="row">
						<div class="col">
							<p class="price">$200</p>
						</div>
						<div class="col-auto">
							<i class="material-icons stars">star</i>
							<i class="material-icons stars">star</i>
							<i class="material-icons stars">star</i>
							<i class="material-icons stars">star</i>
							<i class="material-icons stars">star_half</i>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div>
					<img src="images/image-six.png" alt="">
					<p><span class="span-two">SPECIALIZED ALLEZ</span></p>

					<div class="row">
						<div class="col">
							<p class="price">$200</p>
						</div>
						<div class="col-auto">
							<i class="material-icons stars">star</i>
							<i class="material-icons stars">star</i>
							<i class="material-icons stars">star</i>
							<i class="material-icons stars">star</i>
							<i class="material-icons stars">star_half</i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php');?>
