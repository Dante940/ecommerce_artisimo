<html>
<head>
	<link rel="stylesheet" type="text/css" href="/assets/styles.css">
	<script src= 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	<script type="text/javascript"></script>
	<style type="text/css">
		.footer{
			height: 50px;
			width: 500px;
			margin-left: 525px;
		}
		.footer a{
			margin: auto;
		}
	</style>
</head>
<body>
<?php
	if(!isset($page_num)){
		$page_num = 1;
	}
	if($page_num > (count($allproducts)/30)){
		$page_num = floor(count($allproducts)/30);
	}
	
?>
	<div id="header">
		<a href="/products"><h1>Artisimo</h1></a>
		<a  id="cart" href="/shopping_cart"><img src="/assets/shopping_cart.png">Cart (#)</a>
		<a href="/main"><button>Go to Main</button></a>
		<!-- Button to function that automatically adds categories to art list -->
		<!-- <a href='/test_admin'><button>test categories</button></a> -->
	</div>
	<div id="navbar">
<!-- <<<<<<< HEAD -->
<!-- ======= -->
		<form name="searchbox" action="/products/searchproducts" method="post">
			<input type="text" placeholder="search for art here!" name="search">
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
			
			<a href="/product/<?= $product['merch_id'] ?>"><img src="<?= $product['imageurl']?>"><h4><?=$product['name']?></h4></a>
		</div>
	<?php
	}
	?>
	</div>
	<!-- </div> -->
	<div class='footer'>
		<a href="/products/product_page/<?=$page_num-1?>"><button><-</button></a>
	<?php
		for($i=1; $i<(count($allproducts)/30); $i++){
	?>
			<a href="/products/product_page/<?=$i?>"><button><?=$i?></button></a>		
	<?php		
		}
	?>
		<!-- <a href="/products/product_page/1"><button>1</button></a>
		<a href="/products/product_page/2"><button>2</button></a>
		<a href="/products/product_page/3"><button>3</button></a>
		<a href="/products/product_page/4"><button>4</button></a>
		<a href="/products/product_page/5"><button>5</button></a> -->
		<a href="/products/product_page/<?=$page_num+1?>"><button>-></button></a>
	</div>
</body>
</html>