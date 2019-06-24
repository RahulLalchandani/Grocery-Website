<?php
include("header.php");
?>
<!-- //header-->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
				<li>Payment Details</li>
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
			<h3>Enter Your Card Details </h3>
			
		</div>
		<div align="center" class="form">
		<form action="shipping.php" method="post"></br>
		<input type="text" name="CardName" placeholder="Enter Card Name " required=" " size="30" style="height:30px"pattern="[A-Za-z]{1,}" maxlength="16"></br></br>
		<input type="text" name="CardNo" placeholder="Enter Your 16 digit Card No" required=" " size="30" style="height:30px" maxlength="16" pattern="\d{16}"></br></br>
		<input type="text" name="CVV" placeholder="Enter your CVV No." required=" " size="30" style="height:30px" maxlength="3" pattern="\d{3}"></br></br>
		<input type="text" name="Exp" placeholder="Expiry Date " required=" " size="30" style="height:30px" ></br></br>
		<input type="submit" value="SUBMIT" style="height:30px;width:200px;font-size:20px">
		</form>
	</div>
<?php
echo'</br></br></br></br></br></br></br>';
include("footer.php");
?>
<!-- //footer-->
</html>