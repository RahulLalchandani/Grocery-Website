<?php

include("connection.php");

$Username=$_POST["Username"];
$Password=$_POST["Password"];

if($Username=="dgjoshi" && $Password=="shmit"){
	session_start();
	echo "<script>window.location='stock_alert.php';</script>";		
}
else{
$query='select * from customer_details where Username="'.$Username.'" AND Password="'.$Password.'"';
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
if($count > 0){
	echo "valid user";
	session_start();
	$_SESSION['Username']=$Username;
	echo "<script>window.location='index.html';</script>";
}
else
{
	alert("USERNAME OR PASSWORD IS INVALID !!!");
}
}
?>