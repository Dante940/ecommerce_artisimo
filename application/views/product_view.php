<DOCTYPE! HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/assets/styles.css">
	<title>View Product</title>
</head>
<body>
	<div id="header">
		<a href="/products"><h1>Artisimo</h1></a>
		<a  id="cart" href="/shopping_cart"><img src="/assets/shopping_cart.png">Cart (#)</a>
	</div>

	<a href="/products">Back to Shopping</a>
	<h2><?=$product['name'] ?></h2>
	<!-- product image -->
	<!-- Checks if product has image address -->
<?php
	if(isset($images['address'])){
?>
		<img src="<?= $images['address'] ?>">
<?php
	}
?>
	
	<div>
		<p><?= $product['description'] ?></p>
	</div>

	<form method="post" action='/add_to_cart'>
		<input type='number' value='1' min='1' max='100' name='qty'>
		<input type='hidden' value='<?=$product['id']?>' name='item_id'>
		<input type='hidden' value='<?=$product['name']?>' name='name'>
		<input type='hidden' value='<?=$product['price']?>' name='price'>
		<input type='submit' value='Add to cart'>
	</form>
	<div>
		<h3>Similar Items</h3>
		<img src="#">
	</div>
</body>
</html>