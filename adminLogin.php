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
		<h1 class="h1_bookATrip">Admin Login</h1>
		<br>
		<p style="color:#2a5196;" ><i><strong>Login name</strong> is your first name as C..., <strong>password</strong> is your city name as H...</i> &#128517;</p>
		<br>

		<!--Form-------------------------------------------------------------------------->
	
	
		<form action="authenticate.php" method="POST">
			<label class="form_label" for="loginName">Login name</label>
			<input type="text" class="form_input" id="loginName" name="logintName" placeholder="Your login name" required>
			<br>
			<label class="form_label" for="password">Password</label>
			<input type="text" class="form_input" id="password" name="password" placeholder="*******">
			<br>
			<a href="#" class="submit">
				<input src="#" class="submit_btn" type="submit" name="submit" value="Submit">
			</a>
			<br>
		</form>

	</div>



	

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src='JS/script.js'></script> -->
	
</body>
</html>

