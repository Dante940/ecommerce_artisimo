<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/styles.css">
	<title>Add Product</title>
	<script src="assets/jquery.html"></script>
    <script>
	    $(document).ready(function(){
	        $.get('/index/load_header', function(res) {
	          $('.header').append(res);
	        });

	        $('.add_img').click(function(){
	        	// $('.test').append('<p>test</p>');
	        	$('.test').append($('.img_address').attr("value")+"dojo");
	        })
	    });



    </script>
</head>
<body>
	<div id="header">
		<h1>Artisimo</h1>
	</div>
	<div class='test'></div>
	<form method="post" class="elegant-aero" action='merchandise/create_item'>
			<h2>Add Product</h2>
		<p>Name <input type='text' name='name'></p>
		<p>Description <textarea name='description'></textarea></p>
		<p>Categories <select name='category'></p>
			<option value=""></option>
<?php
		foreach($cats as $cat){
?>
			<option value="<?=$cat['id']?>"><?=$cat['name']?></option>
<?php
		}
?>
		</select>
		<p>or add new category: <input type='text' name='new_category'></p>
		<!-- <p>Image url <button>Upload</button></p> -->
		<p>Price <input type='number' name='price' min='0.01' max='100000000' step='0.01'></p>
		<input type='submit' value='Create'>
	</form>
	<form method='post' class="elegant-aero" action=''>
		<p>Image url <input type='text' name='img_address'><input type='submit' value ='Add'></p>
	</form>
	<a href='main'><button>Cancel</button></a>
	<a href='/'><button>Preview</button></a>
</body>
</html>