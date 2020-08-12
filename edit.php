<?php
echo "<title>CRUD</title>";

include "connection.php";

$id=$_REQUEST['id'];
$query = "SELECT * from registration where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$mobile =$_REQUEST['mobile'];
$dateofbirth =$_REQUEST['dateofbirth'];
$pin =$_REQUEST['pin'];


$update="update registration set name='".$name."', email='".$email."',
mobile='".$mobile."',dateofbirth='".$dateofbirth."',pin='".$pin."' where id='".$id."'";
mysqli_query($conn, $update) or die(mysqli_error($conn));

header("Location: modified.php"); 

}else {
?>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href = "registration.css" type = "text/css" rel = "stylesheet" />

</head>
<div>
	<div class="row heading">
            <div class="col-md-4"></div>
        <div class="col-md-4 w3-card-4 w3-round">
        <h2>UPDATE INFO</h2>
        </div>
        <div class="col-md-4"></div>
        </div>
	<div class="row" >
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <form name = "form1" action="" method = "post" enctype = "multipart/form-data" class="form-horizontal w3-card-4 w3-round w3-animate-top">
           <input type="hidden" name="new" value="1" />
           <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                <div class="form-group">
                    <label class="control-label col-sm-2"  for="name">Name:</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $row['name'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  for="mobile">Mobile:</label>
                    <div class="col-sm-10">
                        <input type="mobile" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile" value="<?php echo $row['mobile'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row['email'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  for="dateofbirth">Date Of Birth:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="dateofbirth" placeholder="Enter DOB" name="dateofbirth" value="<?php echo $row['dateofbirth'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  for="pin">Pin:</label>
                    <div class="col-sm-10">
                        <input type="pin" class="form-control" id="pin" placeholder="Enter pin" name="pin" value="<?php echo $row['pin'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button value="update" type="submit" name="submit" class="btn btn-default">Update</button>
                    </div>
                </div>
        </form>
        </div>
        <div class="col-md-3"></div>
    </div>

<?php } ?>