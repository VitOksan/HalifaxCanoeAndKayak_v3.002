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

