<DOCTYPE! HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/assets/styles.css">
	<title>View Product</title>
</head>
<body>
	<div id="header">
		<h1>Artisimo</h1>
		<a  id="cart" href="#"><img src="/assets/shopping_cart.png">Cart (#)</a>
	</div>
	<div>
		<h3>Artismo</h3>
		<a href="#">Shopping Cart (#)</a>
	</div>
	<a href="#">Back to Shopping</a>
	<h2><?=$product['name'] ?></h2>
	<!-- product image -->
	<img src="<?= $images['address'] ?>">
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