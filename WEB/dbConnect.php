<?php
$hostname = 'mysql.webcindario.com';
$database = 'instateam';
$username = 'instateam';
$password = 'Rendon123';

$conexion = new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
	echo "Lo sentimos, el sitio web está experimentando problemas";
}
?>
