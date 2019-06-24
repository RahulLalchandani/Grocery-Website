<?php
$pay=$_POST["pay"];
if($pay == "card"){
echo "<script>window.location='card.php';</script>";
}
else{
echo "<script>window.location='shipping.php';</script>";
}
?>