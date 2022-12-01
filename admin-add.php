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
	<div class="content_book">
		<h1 class="h1_bookATrip">Admin - Add Adventure</h1>
		<br>
		<p>
			<h4>Input details about the trip</h4>
		</p>
		<br>
		
		<!--Form-------------------------------------------------------------------------->
	
	
		<form action="admin-confirm.php" method="POST">

			<label class="form_label" for="heading">Heading</label>
			<input type="text" class="form_input" id="heading" name="heading" placeholder="" required>
			<br>
			<label class="form_label"  for="tripDate_adminAdd">Trip Date</label>
			<input class="form_input" type="date" id="tripDate_adminAdd" name="tripDate" placeholder=" mm/dd/yyyy" required>
			<!-- <input class="form_input" type="date" id="tripDate" name="tripDate" required> -->
			<br>
			<label class="form_label" for="duration">Duration</label>
			<input type="text" class="form_input" id="duration" name="duration" placeholder="" required>
			<br>
			<label class="form_label" for="summary_adminAdd">Summary</label>
			<input type="text" class="form_input" id="summary_adminAdd" name="summary" placeholder="">
			<br>
			<input class="submit_btn" type="submit" name="submit" value="Submit">
			<br>
		</form>

	</div>

	

	

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src='JS/script.js'></script> -->
	
</body>
</html>

