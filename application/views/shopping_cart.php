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
			<tr>
			</tr>
		</table>
	</div>
</body>
</html>