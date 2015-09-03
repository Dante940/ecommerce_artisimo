<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/styles.css">
	<title>Shopping Cart</title>
	<script src="assets/jquery.html"></script>
    <script>
	    $(document).ready(function(){
	        $.get('/index/load_header', function(res) {
	          $('.header').append(res);
	        });
	    });
	</script>
</head>
<body>
	<div id="header">
		<h1>Artisimo</h1>
		<a  id="cart" href="#"><img src="assets/shopping_cart.png">Cart (#)</a>
	</div>
	<div class='table'>
		<table>
			<thead>
				<th>Item</th>
				<th>Price</th>
				<th>Quanity</th>
				<th>Total</th>
			</thead>
			<tr>
			</tr>
		</table>
	</div>
</body>
</html>