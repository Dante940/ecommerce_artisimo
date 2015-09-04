<?php
	session_start();
?>
<DOCTYPE! HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/styles.css">
	<title>Main Page</title>
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
	</div>
	<h1>Orders</h1>
	<div>
		<table>
			<thead>
				<th>Order ID</th>
				<th>Name</th>
				<th>Date</th>
				<th>Billing Address</th>
				<th>Total</th>
				<th>Status</th>
			</thead>
<?php
		foreach($orders as $order){
?>
			<tr>
				<td><?=$order['id']?></td>
				<td><?=$order['bill_first_name']?></td>
				<td><?=$order['created_at']?></td>
				<td><?=$order['bill_address_1'].' '.
				$order['bill_address_2'].' '.$order['bill_city'].', '.
				$order['bill_state'].' '.$order['bill_zipcode']?></td>
				<td><?='$'.$order['total'].'.00'?></td>
				<td><?=$order['status']?></td>
			</tr>
<?php
		}
?>
		</table>
	</div>
</body>
</html>