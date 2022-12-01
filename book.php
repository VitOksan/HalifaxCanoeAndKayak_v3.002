<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<title>HCK</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' type='text/css' media='screen' href='CSS/style.css'>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src='JS/script.js'></script>

</head>
<body>
	<!--Header----------------------------------------------------------------------------->
	<div class="container header">

		<div class="header__burger box">
			<a href="#" class="burger">
				<img src="img/hamburger.png" class="hamburger" alt="menu button">
			</a>
		</div>

		<div class="header__logo box">
			<a href="index.php" class="logo glare">
				<img src="img/paddle-white.png" class="paddle" alt="Logo">
			</a>
		</div>

		<div class="header__text box">
			<p>Halifax Canoe and Kayak</p>
		</div>

	</div>

	<!--Nav Menue---------------------------------------------------------------------------->
	<div class="container nav__menu">
		<nav class="nav__menu">
			<ul class="menu__list">
				<li>
					<a href="index.php" class="menu__link">Home</a>
				</li>
				<li>
					<a href="book.php" class="menu__link">Book Trip</a>
				</li>
				<li>
					<a href="admin-add.php" class="menu__link">Admin Login</a>
				</li>
			</ul>
		</nav>
	</div>

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
			<input class="form_input" type="datetime" id="tripDate" name="tripDate" placeholder=" mm/dd/yyyy" required>
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


	

	

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src='JS/script.js'></script> -->
	
</body>
</html>

