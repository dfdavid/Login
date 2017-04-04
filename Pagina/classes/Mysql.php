<?php

require_once 'includes/constants.php';

class Mysql {
	private $conn;//Solo se puede acceder por Mysql o sus hijos
	
	function __construct() {//Corre ni bien se instancia Mysql	
		$this->conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('Hubo un problema de conexion a la base de datos');
	}
	
	function verify_Username_and_Pass($un, $pwd){
		$query = "SELECT *
				FROM users
				WHERE username = ? AND password = ?
				LIMIT 1";
				
		if($stmt = $this->conn->prepare($query)) {//Si esto funciona corre el código, sino nada.
			$stmt->bind_param('ss', $un, $pwd);	
			$stmt->execute();
			
			if($stmt->fetch()) {//Si encontró algun match con esos valores
				$stmt->close();
				return true;//Fue correcta la autenticación y devuelve true a la clase Membership
			}	
		}
	}
	
}

?>