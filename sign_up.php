<?php
include("connection.php");
$Username=$_POST["Username"];
$Password=$_POST["Password"];
$Email=$_POST["Email"];
$Phone=$_POST["Phone"];

$query='insert into `customer_details` values("'.$Username.'","'.$Password.'","'.$Email.'","'.$Phone.'")';
echo $query;

Mysqli_select_db("grocery_store");

$result = mysqli_query($con,$query);
echo "<script>window.location='login.html';</script>";
?>
