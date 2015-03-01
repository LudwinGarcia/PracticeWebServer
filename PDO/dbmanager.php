<?php
	//http://www.hermosaprogramacion.com/2014/07/php-mysql-conectar-como.html
	include_once('globals.php');

	class dbmanager{

		public function executeQuery($sql){
			//MySQL PDO
			try {
					$con = new PDO('mysql:host='.config::getBBDDServer().';dbname='.config::getBBDDName(), config::getBBDDUser(), config::getBBDDPwd());
					$result = $con->query($sql);
					return $result;
			}
			catch (PDOException $e) {
				print "¡Error!: " . $e->getMessage() . " ";
				die();
			}
			$con =null;
		}
	}
?>