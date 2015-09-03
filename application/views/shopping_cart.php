<!DOCTYPE HTML>
<html>
<head>
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
	<div class='header'></div>
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
				<td><?=$item['name']?></td>
				<td><?=$item['price']?></td>
				<td><?=$item['qty']?></td>
				<td>$<?=$item['qty']*$item['price']?></td>
			</tr>
<?php
			}
		
?>
		</table>
		<p>Total = $<?=$sum?></p>
	</div>

	<p><a href='main'><button>Go back</button></a></p>
	<p><a href='checkout'><button>Checkout</button></a></p>

	
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
		<p><input type='submit' value='Pay'></p>
</body>
</html>