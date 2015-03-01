<?php
	class config{
		/* All functions return the data
		that we use to connect at the DB*/

		public static function getBBDDServer() {
			//Name of server
			return 'localhost';
		}

		public static function getBBDDName(){
			//In the DB "Library" it's showed like "library"
			//buy the correct name is "Library"
			return  'Library'; 
		}

		public static function getBBDDUser(){
			//Name of User
			return 'root'; 
		}

		public static function getBBDDPwd(){
			//Password to ascces at the DB
			return 'localhost'; 
		}
	}
?>

<?php 
/*
Data to connect with the DB
this example is with variables.

$hostname = 'localhost';
$database = 'android';
$username = 'root';
$password = 'localhost';
*/
?>
