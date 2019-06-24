<?php
$target_dir = "images/";
$target_file = $target_dir.basename($FILES["fileToUpload"]["name"]);
if(move_uploaded_file($FILES["fileToUpload"]["tmp_name"],$target_file)){
	echo "The File ".basename($_FILES["fileToUpload"]["name"])."has been uploaded.";
	}else{
		echo "Sorry, there was an error uploading your file.";
		}
$pname=$_POST["pname"];
$category=$_POST["category"];
$price=$_POST["price"];
$dis_amt=$_POST["dis_amt"];
$pstock=$_POST["pstock"];
$pimage=$_POST["pimage"];

$query='insert into `product_details` values("'.$pname.'","'.$category.'","'.$price.'","'.$dis_amt.'","'.$pstock.'","'.$pimage.'")';
echo $query;

$con=Mysql_connect("localhost","root","");

if(!$con){
		echo "not connected";
}
Mysql_select_db("grocery_store");

$result = mysql_query($query,$con);
echo "<script>window.location='admin.html';</script>";
?>