<?php 
include('heading.php');  
$webpage = 'home';
?>
<script>
	$(document).ready(function() {
		$(window).scroll(function() {
			if ($(this).scrollTop()) {
				$('.to-top').show();
			} else {
				$('.to-top').hide();
			}
		});
	});

</script>

<div class="home home-two" id="one">

	<div class="to-top">
		<a href="#one">
			<svg style="width:3rem;height:3rem" viewBox="0 0 24 24" title="Scroll to Top" id="firstScrollToTop">
				<path fill="#282828" d="M13,20H11V8L5.5,13.5L4.08,12.08L12,4.16L19.92,12.08L18.5,13.5L13,8V20Z" />
			</svg>
			<svg style="width:3rem;height:3rem" viewBox="0 0 24 24" id="secondScrollToTop">
				<path fill="#000000" d="M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M7.4,15.4L12,10.8L16.6,15.4L18,14L12,8L6,14L7.4,15.4Z" />
			</svg>
		</a>
	</div>

	<div class="container" id="homeView">
		<div class="main-content">
			<div class="call-to-action">
				<div class="actual-content">
					<span><strong>JOIN US ON OUR MOVE</strong></span>
					<h1 class="home-h1">BUILT TO LAST <br>BUILT FOR YOU.</h1>
					<p><strong>We have more than 100+ </strong>selections of bikes from different brand that will fit your <br> style and comfort. Shop the latest bikes now.</p>
					<div class="main-btn">
						<button class="actual-button">Shop Now<strong class="material-icons hoverable-icons">navigate_next</strong></button>
					</div>

				</div>
			</div>
		</div>
		<div class="arrow">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>

</div>

<div id="two" class="mt-5 pt-5">

	<div class="container">
		<div class="row">
			<div class="col bikeImg"></div>
			<div class="col-md-8 p-5">
				<h2>FULL SERVICE SHOP</h2>
				<p>We service bikes of all makes and models. It doesn't matter if you bought your bike from us or purchased it online, we can get you ready to ride. </p>
				<div class="row ">
					<div class="col p-3">
						<img src="images/icons/icons8-add_shop.png" class="img-fluid" alt="">
						<p><span>SUSPENSION</span></p>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
					</div>
					<div class="col p-3">
						<img src="images/icons/icons8-maintenance.png" class="img-fluid" alt="">

						<p><span>GRADE A TECH</span></p>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
					</div>
					<div class="col p-3">
						<img src="images/icons/icons8-motorcycle.png" class="img-fluid" alt="">

						<p><span>SUPERIOR FINSIH</span></p>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
					</div>
				</div>
				<button class="actual-button bg-dark text-white">Make an Appointment<strong class="material-icons hoverable-icons">navigate_next</strong></button>

			</div>
		</div>
	</div>
</div>
<div class="container mt-5 p-5" id="blackBikeImage">
	<h1>MAMBA X</h1>
	<p>Pre-order yours today.</p>
	<button class="actual-button">Learn More<strong class="material-icons hoverable-icons">navigate_next</strong></button>
</div>
<style>


</style>
<div class="container-fluid mt-5 p-5" id="marathonbanner">
	<div class="container text-right">
		<div class="row marathon">
			<div class="col-md-6 marathon-left p-5 gradient-bg">
				<h2>READY SET PEDEL</h2>
				<p class="date">October 29 - November 26, 2019 Organized by Wood Dale Park District</p>
				<p class="description">Dim lights, mood-enhancing music and adrenaline-infused motivation guide this class to be a one-of-a-kind spin class. As we ride, we lift light weights to tone muscle. This class has a variety of interval training that will intrigue new muscles and build endurance. Ready, Set, Spin will help with boosting your metabolism, heart rate and muscle toning for stronger bones. Instead of having two classes at 5:30 pm and 6:30 pm, we are going to have one class. This class will have an open-door policy for you to join and leave the class at any time that fits your schedule</p>
				<p class="location">Recreation Complex • 111 E. Foster Avenue Wood Dale, IL 60191</p>

				<p><a href="signup.php"><button href="signup.php" class="actual-button bg-dark text-white">I WANT TO RACE <strong class="material-icons hoverable-icons">navigate_next</strong></button></a></p>
			</div>
			<div class="col-md-6 marathon-right">

			</div>
		</div>
	</div>
</div>
<div id="three" class="mt-5">
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
							<strong class="material-icons stars">star</strong>
							<strong class="material-icons stars">star</strong>
							<strong class="material-icons stars">star</strong>
							<strong class="material-icons stars">star</strong>
							<strong class="material-icons stars">star_half</strong>
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
							<strong class="material-icons stars">star</strong>
							<strong class="material-icons stars">star</strong>
							<strong class="material-icons stars">star</strong>
							<strong class="material-icons stars">star</strong>
							<strong class="material-icons stars">star_half</strong>
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
							<strong class="material-icons stars">star</strong>
							<strong class="material-icons stars">star</strong>
							<strong class="material-icons stars">star</strong>
							<strong class="material-icons stars">star</strong>
							<strong class="material-icons stars">star_half</strong>
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
							<strong class="material-icons stars">star</strong>
							<strong class="material-icons stars">star</strong>
							<strong class="material-icons stars">star</strong>
							<strong class="material-icons stars">star</strong>
							<strong class="material-icons stars">star_half</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container mt-5">
	<div class="row">
		<div class="col border" id="retroBikes">
			<div class="pt-5">
				<h2 class="">SHOP RETRO</h2>
				<p class="bg-white">Order yours today.</p>
				<button class="actual-button bg-dark text-white">Shop Retro<strong class="material-icons hoverable-icons">navigate_next</strong></button>
			</div>
		</div>

		<div class="col" id="usedBikes">
			<div class="pt-5">
				<h2 class="text-white">SHOP USED BIKES</h2>
				<p class="text-white">Visit of your local stores.</p>
				<button class="actual-button">Shop Used Bikes<strong class="material-icons hoverable-icons">navigate_next</strong></button>
			</div>
		</div>
	</div>
</div>

<div class=" pt-5">
	<div class="container" id="banner">
		<img src="images/banklogo.png" height="100" alt="">
		<div class="special-finance">
			<h2 class="text-dark bg-light p-2">SPECIAL FINANCING AVAILABLE</h2>
			<p><span class="text-dark bg-light p-2">12 Months Financing. Sign Up In Now.</span></p>
		</div>

	</div>
</div>
<div class="container learn-referal-program mt-5">
	<div class="">
		<h2>Invite your friends and get $50 in-store credit!</h2>
		<p><small>Whats better than $50 in-store credit? You can use it for anything that is avaliable in anyone of our stores.</small></p>
		<a href="refer-a-friend.php"><button class="actual-button bg-dark text-white">Invite my friends<strong class="material-icons hoverable-icons">navigate_next</strong></button></a>

	</div>

</div>
<div id="bookAppointment" class="container-fluid mt-5 pt-5 mb-5">
	<div class="container text-left">


		<div class="row">
			<div class="col-md-6"><img src="../images/person.png" class="img-fluid" alt=""></div>
			<div class="col-md-6 mt-2 ">
				<img src="../images/icons/icons8-trophy_2.png" class="img-fluid" alt="Trophy Icon"><br>
				<p><span>#1 Rated in Chicago</span></p>
				<h2 class="text-dark">Book Your Appointment<br>Today!</h2>
				<div class="main-btn">
					<button class="actual-button bg-dark text-white">Book Now<strong class="material-icons hoverable-icons">navigate_next</strong></button>
				</div>
			</div>

		</div>
	</div>
</div>

<style>
	.learn-referal-program {
		padding: 2rem;
		border: 2px solid black;
	}

</style>
<style>


</style>




<script>
	/*function myFunction() {
		var searchBar = document.getElementsByClassName("search-bar");
		if (searchBar.style.display ==="none"){
			searchBar.style.display = "block";
		} else{
			searchBar.style.display = "none";
		}
	}*/

</script>

<?php include('footer.php');?>
