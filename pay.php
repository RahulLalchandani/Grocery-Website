<!--header-->
<?php
include("header.php");
?>
<!-- //header-->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
				<li>Payment Modes</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
	</div>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--footer-->
<div class="privacy about">
			<h3>SELECT YOUR PAYMENT MODE  !</h3>
		</div>
	<div align="center">
	<form action="checkpay.php" method="post">
		<input type="radio" name="pay" value="cod" checked>Cash on Delivery</br></br>
		<input type="radio" name="pay" value="card"> Credit / Debit Card </br></br></br></br>
		<input type="submit" name="proceed to pay" value="PROCEED" ></br>
	</form>
		</div>
<?php
echo'</br></br></br></br></br></br></br>';
include("footer.php");
?>
<!-- //footer-->
</html>