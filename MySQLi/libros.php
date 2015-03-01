<?php
	include_once('globals.php');
	include_once('dbmanager.php');

	class libros{

		private function getLibros(){
			$sql = "SELECT l.* ";
			$sql .= " FROM libros AS l ";
			$db = new dbmanager();
			return $db->executeQuery($sql);
		}

		public function getJSONLibros(){
			$json = "";
			$i = 0; 
			$result = $this->getLibros();
			$json .= " { \"libros\" : [ ";

			foreach ( $result as $row) { 
				if($i > 0)
				$json .= ",";

				$json .= ' { "id" : "'.$row['id_libro'].'", "libro": "'.$row['libro'].'", "isbn": "'.$row['isbn'].'" ';
				$json .= "} ";   
				$i++;
		}  

		$json .= " ] ";
		$json .= " } ";  
		return $json; 
		}
	}
?>