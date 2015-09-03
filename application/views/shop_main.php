<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/styles.css">
	<script src= 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	<script type="text/javascript"></script>
</head>
<body>
	<div id="header">
		<h1>Artisimo</h1>
		<a  id="cart" href="#"><img src="assets/shopping_cart.png">Cart (#)</a>
	</div>
	<div id="navbar">
		<form name="activecategories" action="/see_products/getsomeproducts" id="thisform" method="post">
		<?php foreach($cats as $cat){
			?>
			<input type="checkbox" class="checkedcategory" name="<?= $cat['name'] ?>" checked><?= $cat['name'] ?>
			<?php
			echo count($this->product->product_count($cat['name']));
			?><br>
			<?php } ?>
	<input type="submit" value="Sort by Category">
		</form>
		</div>
	<div id="allproducts">
	<?php
	foreach($allproducts as $product){
		?>

		<div class="product">
			<img src="<?= $product['imageurl'] ?>">
			<a href="product/<?= $product['merch_id'] ?>"><h4><?=$product['name']?></h4></a>
		</div>
	<?php
	}
	?>
	</div>
	</div>
</body>
</html>