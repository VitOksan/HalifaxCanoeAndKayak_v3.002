<!DOCTYPE html>
<html>
<head>
	<?php 
		include 'header.php';
	?>

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
			<a href="#" class="logo">
				<img src="img/paddle-white.png" class="paddle" alt="Logo">
			</a>
		</div>

		<div class="header__text box">
			<p>Halifax Canoe and Kayak</p>
		</div>

	</div>

	<!--Nav Menue---------------------------------------------------------------------------->
	<?php 
		include 'navmenu.php';
	?>

	<!--Content ------------------------------------------------------------------------------>
	<?php 
		include 'content.php';
	?>
	<!--Announcement-------------------------------------------------------------------------->
	<?php 
		include 'announcement.php';
	?>
	
</body>
</html>

