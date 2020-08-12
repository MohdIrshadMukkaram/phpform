<?php

include "connection.php";
$sql="INSERT INTO registration (name,email,mobile,dateofbirth,pin) VALUES ('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[dateofbirth]','$_POST[pin]')";
if (!mysqli_query($conn,$sql))
{
die('Error: ' . mysqli_error($conn));
}
?>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href = "registration.css" type = "text/css" rel = "stylesheet" />
</head>
<div class="row">
	<div class="col-md-4"></div>
	<div class="toast mt-3 col-md-4">
		<div class="toast-header">
			CRUD
		</div>
		<div class="toast-body">
			Record added succesfully!
		</div>
	</div>
	<div class="col-md-4"></div>
</div>
<div class="row w3-animate-top">
	<div class="col"></div>
	<div class="links w3-card-4 w3-round col">
		<a href='modified.php'>View All Records</a><br>
	</div>
	<div class="links w3-card-4 w3-round col">
		<a href='form.php'>Insert New Record</a>
	</div>
	<div class="col"></div>
</div>

<script type="text/javascript" src="script.js"></script>
