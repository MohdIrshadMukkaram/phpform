<!DOCTYPE html>
<html>
<?php    
    
include "connection.php";   

?>   

<head>
<title>CRUD</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href = "registration.css" type = "text/css" rel = "stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

</head>
<body>
<div class="row">
<div class="col-md-4"></div>
<div class="links w3-card-4 w3-round col-md-4 w3-animate-top">
<a href='form.php'>Insert New Record</a>
</div>
<div class="col-md-4"></div>

</div>

<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<table class="w3-card-4 w3-round w3-animate-top">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Email</strong></th>
<th><strong>Contact No</strong></th>
<th><strong>Date Of Birth</strong></th>
<th><strong>Zip</strong></th>
<th colspan="2"><strong>Operations</strong></th>
</tr>
</thead>
<tbody>
<?php

$sel_query="Select * from registration;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["email"]; ?></td>
<td align="center"><?php echo $row["mobile"]; ?></td>
<td align="center"><?php echo $row["dateofbirth"]; ?></td>
<td align="center"><?php echo $row["pin"]; ?></td>

<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Update</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
<div class="col-md-2"></div>
</div>

</body>
</html>