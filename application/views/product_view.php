<!DOCTYPE HTML>
<html>
<head>
	<title>View Product</title>
</head>
<body>
	<div>
		<h3>Artismo</h3>
		<a href="#">Shopping Cart (#)</a>
	</div>
	<a href="#">Back to Shopping</a>
	<h2><?= $product['name'] ?></h2>
	<!-- product image -->
	<img src="#">
	<div>
		<p><?= $product['description'] ?></p>
	</div>

	<form method="post" action='shopmerch/buy_item'>
		<select>
			<option value="1 (PRODUCT PRICE)">1 (PRODUCT PRICE)</option>
			<option value="2 (PRODUCT PRICE)">1 (PRODUCT PRICE)</option>
			<option value="3 (PRODUCT PRICE)">1 (PRODUCT PRICE)</option>
			<option value="4 (PRODUCT PRICE)">1 (PRODUCT PRICE)</option>
		</select>
		<input type='submit' value='Buy'>
	</form>
	<div>
		<h3>Similar Items</h3>
		<img src="#">
	</div>
</body>
</html>