<?php
	//http://www.hermosaprogramacion.com/2014/07/php-mysql-conectar-como.html
	include_once('globals.php');

	class dbmanager{

		public function executeQuery($sql){
			$con = mysql_connect(config::getBBDDServer(), config::getBBDDUser(), config::getBBDDPwd());

			if (!$con) {
				die('Could not connect: ' . mysql_error());
			}

			mysql_select_db(config::getBBDDName(), $con);
			$result = mysql_query($sql);
			mysql_close($con);
			return $result;
		}
	}
?>