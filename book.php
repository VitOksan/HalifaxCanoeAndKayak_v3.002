<!-- Connection ----------------------------------------------------------------------------------->
	<?php 
		include 'header.php';
	?>
	<!--Nav Menue---------------------------------------------------------------------------->
	<?php 
		include 'navmenu.php';
	?>

<!--Content ------------------------------------------------------------------------------>
	<div class="container content_book">

			<!-- <h1 class="h1_bookATrip">Book a Trip</h1> -->
			<h1 class="h1_bookATrip">Book A Trip</h1>
			<br>


		<!--Form-------------------------------------------------------------------------->
			<p><i>Just Some Short Details</i></p>
			<br>
		<form class="form" action="thank-you.php" method="GET">
			<!-- <label class="form_label" for="firstName">First Name</label>
			<input type="text" name="firstName" placeholder="Your First Name" required>
			<br>
			<label class="form_label" for="lastName">Last Name</label>
			<input type="text" name="lastName" placeholder="Your Last Name">
			<br>
			<br> -->
			<label class="form_label" for="email">Email</label>
			<input type="email" class="form_input" id="email" name="email" placeholder="" required>
			<!-- <input type="email" class="form_input" id="email" name="email" placeholder="Your Email" required> -->
			<br>
			<label class="form_label" for="location">Location</label>
			<select class="form_input" id="location" name="location">
				<option value="" selected disabled>Select</option>
				<option value="Halifax">Halifax</option>
				<option value="Sydney">Sydney</option>
			</select>
			<br>
			<label class="form_label"  for="tripDate">Trip Date</label>
			<input class="form_input" type="date" id="tripDate" name="date" placeholder=" mm/dd/yyyy" required>
			<!-- <input class="form_input" type="date" id="tripDate" name="tripDate" required> -->
			
			<br>
			<a href="#" class="submit">
				<input class="submit_btn" type="submit" name="submit" value="Submit">
			</a>
			<br>
			<br>
			<br>
		
		</form>


	</div>





