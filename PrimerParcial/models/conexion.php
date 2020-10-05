<?php
	//Se crea la conexión hacia la base de datos, especificando el nombre
	class Conexion {
		public function conectar () {
			$link = new PDO("mysql:host=localhost;dbname=libro","root","");
			return $link;
		}
	}

?>
