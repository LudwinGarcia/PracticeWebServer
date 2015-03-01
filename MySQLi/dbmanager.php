<?php
	//http://www.hermosaprogramacion.com/2014/07/php-mysql-conectar-como.html
	include_once('globals.php');

	class dbmanager{

		//MySQLi 
		public function executeQuery($sql){
			$mysqli = new mysqli(config::getBBDDServer(), config::getBBDDUser(), config::getBBDDPwd(),config::getBBDDName());
			if ($mysqli -> connect_errno) {
				die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno(). ") " . $mysqli -> mysqli_connect_error());
			} else {
				$result=$mysqli->query($sql);
				return $result;
				$mysqli -> mysqli_close();
			}
		}
	}
?>