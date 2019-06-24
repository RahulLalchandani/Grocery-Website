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
				<li>Shipping Details</li>
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

<div class="privacy about">
			<h3>Enter Your Shipping Details </h3>
			
		</div>
		<div align="center" class="form">
		<form action="confirm.php" method="post"></br>
		<input type="text" name="FirstName" placeholder="Enter your name" required=" " size="30" style="height:30px;border:3px solid black;"class="btn" ></br></br>
		<input type="text" name="LastName" placeholder="Last Name" required=" " size="30" style="height:30px;border:3px solid black;"class="btn"></br></br>
		<input type="text" name="Address" placeholder="Enter Your Address." required=" " size="30" style="height:30px;border:3px solid black;"class="btn"></br></br>
		<input type="text" name="AltAddress" placeholder="Alternate Address" required=" " size="30" style="height:30px;border:3px solid black;"class="btn"></br></br>
		<input type="text" name="City" placeholder="Enter Your City" required=" " size="30" style="height:30px;border:3px solid black;"class="btn"></br></br>
		<input type="text" name="State" placeholder="Enter Your State" required=" " size="30" style="height:30px;border:3px solid black;"class="btn"></br></br>
		<input type="text" name="District" placeholder="Enter Your District" required=" " size="30" style="height:30px;border:3px solid black;"class="btn"></br></br>
		<input type="text" name="PinCode" placeholder="Enter Your Pin Code" required=" " size="30" style="height:30px;border:3px solid black;"class="btn"></br></br>
		<input type="text" name="MobileNo" placeholder="Enter Your Mobile No" required=" " size="30" style="height:30px;border:3px solid black;"class="btn"></br></br>		
		<input type="text" name="Telephone" placeholder="Enter Your Alternate Number" required=" " size="30" style="height:30px;border:3px solid black;"class="btn"></br></br>		
		<input type="submit" value="SUBMIT" style="height:30px;width:200px;font-size:20px"></br></br></br></br></br></br></br>
		</form>
	</div>
<!--footer>
<?php
include("footer.php");
?>
<!-- //footer-->
</html>