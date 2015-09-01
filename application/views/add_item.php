<!DOCTYPE HTML>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
	<h2>Add Product</h2>
	<form method="post" action='addmerch/create_item'>
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
		<p>Images<button>Upload</button></p>
		<a href='/'><button>Cancel</button></a>
		<a href='/'><button>Preview</button></a>
		<input type='submit' value='Create'>

	</form>
</body>
</html>