<?php

require 'Mysql.php';

class Membership {
	
			function validate_user($un, $pwd) {
			$mysql = New Mysql();
			$ensure_credentials = $mysql->verify_Username_and_Pass($un, md5($pwd));//Necesito capturar el true de la función en la variable
			
			if($ensure_credentials) { //Si devuelve true crear sesión
				echo "creando sesion";
				$_SESSION['status'] = 'authorized';
				header("location: index.php");	//Redirecciona ahí
			} else echo "Por favor ingrese un usuario y contraseña válidos";			
			
			
		}//End validate_user()
		
		function log_User_Out() {
			if(isset($_SESSION['status'])) {
				unset($_SESSION['status']);
				
				if(isset($_COOKIE[session_name()])) 
					setcookie(session_name(), '', time() - 10000);
					session_destroy();
			}
		}//End log_User_Out()
		
		function confirm_Member() {
			if($_SESSION['status'] != 'authorized') header("location: login.php");
		}//End confirm_Member()
		
	
}

?>