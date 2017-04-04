<?php

session_start();
require_once 'classes/Membership.php';
$membership = new Membership();
$membership->confirm_Member();


$LED = $_POST['LED'];
if($LED == 'LED    1'){
	echo "Prendiendo LED 1";
	shell_exec('python /var/www/html/LEDon1.py');
}
if($LED == 'LED    2'){
	echo "Prendiendo LED 2";
	shell_exec('python /var/www/html/LEDon2.py');
}
if($LED == 'LED    3'){
	echo "Prendiendo LED 3";
	shell_exec('python /var/www/html/LEDon3.py');
}	
if($LED == 'LED    4'){
	echo "Prendiendo LED 4";
	shell_exec('python /var/www/html/LEDon4.py');
}	
?>
<html>
<body>
<p>
<a href="index.php">Atrás</a>
</p> 
</body>
</html>
