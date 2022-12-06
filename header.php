<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>HCK</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>

<link rel='stylesheet' type='text/css' media='screen' href='CSS/style.css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src='JS/script.js'></script>

<!-- Connection ----------------------------------------------------------------------------------->
	<?php
		/* Attempt MySQL server connection. Assuming you are running MySQL
		server with default setting (user 'root' with no password) */

		$conn = mysqli_connect("localhost", "root", "", "halifaxcanoeandkayak");
			     
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
	?>