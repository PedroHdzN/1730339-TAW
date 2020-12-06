<?php
$hostname = 'www.softwareatyourscope.me/phpmyadmin/';
$database = 'DataBase';
$username = 'pedro';
$password = 'pedro';

$conexion = new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
	echo "Lo sentimos, el sitio web está experimentando problemas";
}
?>
