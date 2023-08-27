


<?php

$con=new

mysqli("0.0.0.0", "root", "root", "ramdb");

$name=$_POST['name'];

$email=$_POST['email'];
$message=$_POST['message'];

$sql="INSERT INTO Ram (name, email, message) VALUES ('$name', '$email','$message')";

$result=mysqli_query($con,$sql);

if($result == "true"){

echo

"<center><h2>Submitted successfully..</h2></ center>";

}

else{

echo "<center><h2>Not submitted..</h2></center>"; }
