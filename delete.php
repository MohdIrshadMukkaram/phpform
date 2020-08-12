

<?php
require('connection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM registration WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: modified.php"); 
?>