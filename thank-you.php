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
		<div class="content_BT">
			<h1 class="h1_bookATrip">Thank You</h1>
			<br>
			<p>Thank you: <?php echo "<b>" . $_GET["email"] . "</b>"?></p>
			<br>
			<p>We will contact you about the:</p>
			<p><?php echo "<b class='place'>" . $_GET["location"] . "</b>" ?>  trip on the  <?php echo "<b>" . $_GET["date"] ."</b>" ?>.</p>
		</div>
	</div>

