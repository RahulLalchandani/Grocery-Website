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
				<li>My Shopping Cart</li>
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
<script>
function updateCart(){
	var data = document.cookie;
	var grandtotal =  0;
	//alert(data);
	var product = data.split(';');
	var noOfProducts = 0;
	for(var i = 0; i < product.length; i++){
		//alert(product[i]);
		var productKey = product[i].split('=');
		if(productKey[0].includes("PROD")){
		var temp = productKey[0].replace("PROD","");
		
		var splicook = productKey[1].split("^_^");
		var total = parseInt(splicook[0]) * parseInt(splicook[1]);
		grandtotal = grandtotal + total;
		$( "#cart_view" ).append("<tr><td>"+temp+"</td><td>"+splicook[0]+"</td><td>"+splicook[1]+"</td><td>"+total+"</td><td><input type='button' class='btn' onclick = \"removeCart(\'"+productKey[0]+"\')\" style='background:rgba(250,0,0,0.7);color:white;' value='X'/></td></tr>");

		
		}
		
		
		
	}
	
		
		
$( "#cart_view" ).append("<tr style='border:1px solid black;'><td>GRAND TOTAL</td><td></td><td></td><td>"+grandtotal+"</td><td></tr>");
	updateTable();
		} 
	
function removeCart(id){
	document.cookie = id+"=;expires=Thu, 01 Jan 1970 00:00:00 UTC";
	window.location = "cart.php";
}	
</script>

</script>
  </head>
  <body onload="updateCart();">
<div class="container">
     
  <table class="table">
    <thead>
      <tr>
        <th>PRODUCT NAME</th>
        <th>PRODUCT PRICE</th>
        <th>QUANTITY</th>
        <th>TOTAL</th>
        <th></th>
      </tr>
    </thead>
    <tbody id="cart_view">
    </tbody>
  </table>
					
					<form action="pay.php" method="post">
					<input type = "button" value="CHECKOUT " class="button" style="margin-left:520px" onClick= "window.location.href='pay.php'">
					</form>
					
</div>
</body>
<!--footer-->
<?php
echo'</br></br></br></br></br></br></br>';
include("footer.php");
?>
<!-- //footer-->
</html>