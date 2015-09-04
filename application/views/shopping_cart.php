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
		<a href="/products"><h1>Artisimo</h1></a>
		<a  id="cart" href="/shopping_cart"><img src="assets/shopping_cart.png">Cart (#)</a>
	</div>
	<div class='table'>
		<table>
			<thead>
				<th>Item</th>
				<th>Price</th>
				<th>Quanity</th>
				<th>Total</th>
			</thead>
<?php
	// $cart = $this->session->userdata['cart'];
	$sum = 0;
			foreach($cart as $item){
				$sum += $item['qty']*$item['price'];
?>
	
			<tr>
				<td><a href="/product/<?=$item['item_id']?>"><?=$item['name']?></a></td>
				<td>$ <?=$item['price']?>.00</td>
				<td>
					<form method='post' action='/edit_qty' id="<?=$item['item_id']?>">
						<input type='hidden' name ="item_id" value="<?=$item['item_id']?>">
						<input type='number' min='1' max='100' name='qty' value="<?=$item['qty']?>">
					</form>
				</td>
				<td>$<?=$item['qty']*$item['price']?></td>
				<td><a href="/cart_delete/<?=$item['item_id']?>"><button>Delete</button></a></td>
				<td><input type='submit' value='Edit qty' form="<?=$item['item_id']?>"></td>
			</tr>
<?php
			}
		
?>
		</table>
		<p>Total = $<?=$sum?>.00</p>
	</div>

	<p><a href='/products'><button>Go back</button></a></p>
	

	
	<form method='post' action='checkout'>
		<h3>Shipping Information</h3>
		<p>First Name: <input type='text' name='ship_first_name'></p>
		<p>Last Name: <input type='text' name='ship_last_name'></p>
		<p>Address: <input type='text' name='ship_address_1'></p>
		<p>Address 2: <input type='text' name='ship_address_2'></p>
		<p>City: <input type='text' name='ship_city'></p>
		<p>State: <input type='text' name='ship_state'></p>
		<p>Zipcode: <input type='text' name='ship_zipcode'></p>
		<h3>Billing Information</h3>
		<p>First Name: <input type='text' name='bill_first_name'></p>
		<p>Last Name: <input type='text' name='bill_last_name'></p>
		<p>Address: <input type='text' name='bill_address_1'></p>
		<p>Address 2: <input type='text' name='bill_address_2'></p>
		<p>City: <input type='text' name='bill_city'></p>
		<p>State: <input type='text' name='bill_state'></p>
		<p>Zipcode: <input type='text' name='bill_zipcode'></p>
		<p>Card: <input type='text' name='card'></p>
		<p>Security Code: <input type='text' name='card_code'></p>
		<p>Expiration: <input type='text' name='card_month' placeholder='(mm)'> 
			/ <input type='text' name='card_year' placeholder='(year)'></p>
		<p><input type='submit' value='Checkout'></p>
</body>
</html>