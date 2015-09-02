<html>
<head>
	<script src= 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'>
</script>
<script type="text/javascript">
</script>
	<style type="text/css">
h1{
	color:red;
/*	background-image: url(/assets/cargoshorts.jpg);
*/}
.product{
	height:120px;
	width:100px;
	display:inline-block;
	margin:10px;
}
#wrapper{
	height:1200px;
	width:1200px;
	background-color:blue;
}
#allproducts{
	height:600px;
	width:900px;
	background-color:red;
	display:inline-block;
}
#navbar{
	background-color:yellow;
	height:600px;
	width:200px;
	display:inline-block;
	vertical-align:top;
}
	</style>
</head>
<div id="wrapper">
<h1>Welcome to our ecommerce site. May we take your order???</h1>
<div id="navbar">
	<form name="activecategories" action="/see_products/getsomeproducts" id="thisform" method="post">
	<?php foreach($cats as $cat){
		?>
		<input type="checkbox" class="checkedcategory" name="<?= $cat['name'] ?>" checked><?= $cat['name'] ?>
		<?php
		echo count($this->category->product_count($cat['name']));
		?><br>
		<?php
}
?>
<input type="submit" value="sort by category">
	</form>
	</div>
<div id="allproducts">
<?php foreach($allproducts as $product){
	?>

	<div class="product">
		<h4><?=$product['name']?></h4>
	</div>
<?php
}
?>
</div>
</div>
</html>