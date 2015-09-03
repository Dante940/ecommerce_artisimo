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
	<h1>Admin Page</h1>
</body>
</html>