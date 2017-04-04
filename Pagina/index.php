<?php

session_start();
require_once 'classes/Membership.php';
$membership = new Membership();
$membership->confirm_Member();

?>

<html>
<head>
<title> Index.php </title>
</head>

<body>
	<form action="LEDS2.php" method="post">
	<input type="submit" name="LED" value="LED    1"/><br><br>
	</form>
	<form action="LEDS2.php" method="post">
	<input type="submit" name="LED" value="LED    2"/><br><br>
	</form>
	<form action="LEDS2.php" method="post">
	<input type="submit" name="LED" value="LED    3"/><br><br>
	</form>
	<form action="LEDS2.php" method="post">
	<input type="submit" name="LED" value="LED    4"/><br><br>
	</form>
<a href="login.php?status=loggedout">Log Out</a> 



</body>
</html>