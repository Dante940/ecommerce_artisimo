<html>
<head>
	<link rel="stylesheet" type="text/css" href="/assets/styles.css">
	<script src= 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	<script type="text/javascript"></script>
</head>
<body>
<?php
	if(!isset($page_num)){
		$page_num = 1;
	}
?>
	<div id="header">
		<h1>Artisimo</h1>
		<a  id="cart" href="/shopping_cart"><img src="assets/shopping_cart.png">Cart (#)</a>
		<a href="/main"><button>Go to Main</button></a>
	</div>
	<div id="navbar">
<!-- <<<<<<< HEAD -->
<!-- ======= -->
		<form name="searchbox" action="/products/searchproducts" method="post">
			<input type="text" value="search for art here!" name="search">
			<input type="submit" value="search for art">
		</form>

<!-- >>>>>>> a6cc66edc4370031b73dbf18693af0db0b60f37c -->
		<form name="activecategories" action="/products/getsomeproducts" id="thisform" method="post">
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
	$first = 30*($page_num-1);
	// var_dump($allproducts);
	$display_products = array_slice($allproducts, $first, 30);
	foreach($display_products as $product){
		?>

		<div class="product">
			
			<a href="product/<?= $product['merch_id'] ?>"><img src="<?= $product['imageurl']?>"><h4><?=$product['name']?></h4></a>
		</div>
	<?php
	}
	?>
	</div>
	<!-- </div> -->
	<div>
		<a href="/products/product_page/1"><button>1</button></a>
		<a href="/products/product_page/2"><button>2</button></a>
		<a href="/products/product_page/3"><button>3</button></a>
		<a href="/products/product_page/4"><button>4</button></a>
		<a href="/products/product_page/5"><button>5</button></a>
	</div>
</body>
</html>