<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/styles.css">
	<title>View Product</title>
</head>
<body>
	<div id="header">
		<h1>Artisimo</h1>
		<a  id="cart" href="#"><img src="assets/shopping_cart.png">Cart (#)</a>
	</div>
	<div>
		<h3>Artismo</h3>
		<a href="#">Shopping Cart (#)</a>
	</div>
	<a href="#">Back to Shopping</a>
	<h2><?= $product['name'] ?></h2>
	<!-- product image -->
	<img src="<?= $images['address'] ?>">
	<div>
		<p><?= $product['description'] ?></p>
	</div>

	<form method="post" action='shopmerch/buy_item'>
		<select>
			<option value="1 (<?= $product['price'] ?>)">1 (<?= $product['price'] ?>)</option>
			<option value="2 (<?= $product['price'] ?>)">2 (<?= $product['price'] ?>)</option>
			<option value="3 (<?= $product['price'] ?>)">3 (<?= $product['price'] ?>)</option>
			<option value="4 (<?= $product['price'] ?>)">4 (<?= $product['price'] ?>)</option>
		</select>
		<input type='submit' value='Buy'>
	</form>
	<div>
		<h3>Similar Items</h3>
		<img src="#">
	</div>
</body>
</html>