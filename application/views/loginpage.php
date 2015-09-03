<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/styles.css">
	<title>Login Page</title>
</head>
<body>
	<div id="header">
		<h1>Artisimo</h1>
	</div>
	<?=$this->session->flashdata('errors')?>
	<h2>Admin Login Page</h2>
	<form method='post' action='/login_user'>
		<input type='text' name='email' placeholder='Email'>
		<input type='password' name='password' placeholder='Password'>
		<input type='submit' value='Login'>
	</form>
	<h2>Register new user</h2>

	<form method='post' action='/register_user'>
		<input type='text' name='first_name' placeholder='First Name'>
		<input type='text' name='last_name' placeholder='Last Name'>
		<input type='text' name='email' placeholder='Email'>
		<input type='password' name='password' placeholder='Password'>
		<input type='password' name='password_confirm' placeholder='Confirm Password'>
		<input type='submit' value='Register'>
	</form>
</body>
</html>