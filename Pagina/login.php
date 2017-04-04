<?php
session_start();
require_once 'classes/Membership.php';
$membership = new Membership();

// Si el usuario clickea el link "Log out" en la página index.
if(isset($_GET['status']) and $_GET['status'] == 'loggedout') {
		$membership->log_User_Out();
}

//El usuario ingresó un username, una password y clickeó submit?
if($_POST and !empty($_POST['username']) and !empty($_POST['pwd'])) {
	$response = $membership->validate_user($_POST['username'], $_POST['pwd']);
}
	
?>


<html>
<head>
<title> Login </title>
</head>

<body>
<div id="login">
	<form method="post" action="">
		<h2>Login <small>enter your credentials</small></h2>
		<p>
			<label for="username">Username: </label>
			<input type="text" name="username" />
		</p>
		
		<p>
			<label for="pwd">Password: </label>
			<input type="password" name="pwd" />
		</p>
		
		<p>
			<input type="submit" id="submit" value="Login" name="submit" />
		</p>
	</form>
</div><!--end login-->
</body>
</html>