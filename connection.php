<?php  
       $servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysqli_connect($servername , $username , $password) or die("unable to connect to host");  
       $sqldb = mysqli_select_db($conn,'test') or die("unable to connect to database"); 
?>   