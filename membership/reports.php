<?php 

session_start();

if(!isset($_SESSION['user'])){
header("Location:../login.php");
}


?>
<?php include('heading.php'); ?>
<div class="container mt-5 mb-5">
	<!-- SELECT `fname`, `lname`, `email`, `phone`, `distance` FROM `runner` -->
	<div class="pt-5">
		<h2>Chicago's Biking Marathon</h2>
		<p>Memebers that have signed up for our biking marathon.</p>
	</div>
	<!-- RADIO BUTTON SCRIPT -->
	<?php 
	/*
	if(isset($_POST['submit_sort'])){
		$radio = $_POST['sort'];
		if($radio =='fname'){
			$select ="SELECT fname, address1 FROM mytablye ORDER BY fname";
		} elseif($radio =='address1'){
			$select ="SELECT fname, address1 FROM mytable ORDER BY address1";
		}		
		$result = mysqli_query($lrconnect,$select)ordie("Invalid query: ".mysqli_error($lrconnect));
		*/
	?>
	<!-- RADIO BUTTONS -->
	<!--
	<div>
	  <form action="<?php // $_SERVER['PHP_SELF'];?>" method="post">
			<div class="form-group">
				<fieldset id="group1">
					<input type="radio" value="value1" name="fname">
					<input type="radio" value="value2" name="address1">
				</fieldset>
			</div>
		</form>
	</div>
	-->
	<div class="table-responsive">

		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">First Name</th>
					<th scope="col">Last Name</th>
					<th scope="col">Email Address</th>
					<th scope="col">Phone Number</th>
					<th scope="col">Biking Distance</th>
				</tr>
			</thead>
			<?php 
			include('../includes/dbuser.php');
			$query = "SELECT `fname`, `lname`, `email`, `phone`, `distance` FROM `runner`";
			$result = mysqli_query($lrconnect,$query);
				if($result == false) {
						$error_message = mysqli_error();
						echo "<p>There has been a query error: $error_message</p>";
				}
				if(mysqli_num_rows($result)==0) {
					echo "No members are signed up yet.";
				}
			while($row = mysqli_fetch_assoc($result)){
				echo '<tbody><tr>';
				echo '<td><strong>'.$row['fname'].'</strong></td>';
				echo '<td>'.$row['lname'].'</td>';
				echo '<td>'.$row['email'].'</td>';
				echo '<td>'.$row['phone'].'</td>';
				echo '<td><strong>'.$row['distance'].'</strong></td>';
				echo '</tr></tbody>';
			}
		?>

		</table>
	</div>

</div>
<?php include('footer.php'); ?>
