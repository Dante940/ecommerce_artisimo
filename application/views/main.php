<?php
	session_start();
?>
<DOCTYPE! HTML>
<html>
<head>
	<title>Main Page</title>
	<script src="assets/jquery.html"></script>
    <script>
	    $(document).ready(function(){
	        $.get('/index/load_header', function(res) {
	          $('.header').append(res);
	        });
	    });
    </script>
</head>
<body>
	<div class='header'></div>
	<h2>Current user is <?= $this->session->userdata('first_name')?> at <?= $this->session->userdata('admin')?> level</h2>
	<a href='addmerch'><button>Add Item</button></a>
	<a href='edit_item'><button>Edit Item</button></a>
	<p><a href='logout_user'><button>Logout</button></a></p>
</body>
</html>