<!-- Connection ----------------------------------------------------------------------------------->
	<?php 
		include 'header.php';
	?>
	<!--Nav Menue---------------------------------------------------------------------------->
	<?php 
		include 'navmenu.php';
	?>

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

