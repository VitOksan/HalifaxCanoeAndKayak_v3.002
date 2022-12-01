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
		<h1 class="h1_bookATrip">Admin - Confirm</h1>
		<br>
		

		<br>

		<!-- Connection ----------------------------------------------------------------------->
		<?php
			/* Attempt MySQL server connection. Assuming you are running MySQL
			server with default setting (user 'root' with no password) */

			$conn = mysqli_connect("localhost", "root", "", "halifaxcanoeandkayak");
			     
			// Check connection
			if($conn === false){
			    die("ERROR: Could not connect. " . mysqli_connect_error());
			}
	    ?>


		<!-- Confirmation --------------------------------------------------------------------->

		<?php

			$heading = $_POST['heading'];
			$tripDate = $_POST['tripDate'];
			$duration = $_POST['duration'];
			$summary = $_POST['summary'];

			$sql = "INSERT INTO halifaxcanoeandkayak.adventures (heading, tripDate, duration, summary) 
        			VALUES ('$heading', '$tripDate', '$duration', '$summary')";

        	if (mysqli_query($conn, $sql)) {
        		
        		echo "<p style='color:#2a5196;'><i><strong>Data has added successfully to DB</strong></i> &#128077;</p>";
        	} else {     		
        		echo "<p style='color:red;' ><i><strong>Something went wrong</strong></i> &#128527;</p>";
        	}

        ?>

        <br>
        <br>
        <br>

		<div class="allAdv">
			<a href="index.php" class="viewAllAdv">
				<h2>View All Adventures</h2>
			</a>
		</div>
		<br>




	</div>

	

	

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src='JS/script.js'></script> -->
	
</body>
</html>

