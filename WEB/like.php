<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$usuario_origen= $_POST['ORIGEN'];
	$publicacion= $_POST['publicacion'];


	settype($usuario_origen, "integer");
	settype($publicacion, "integer");

	require_once('dbConnect.php');

	$sql = "SELECT * FROM Likes WHERE idUsuarios = ".$usuario_origen." AND idPublicaciones= ".$publicacion." ";
	$result = mysqli_query($conexion,$sql);

	$check = mysqli_fetch_array($result);

	if (isset($check)) {
		#echo 'Exito'; se sabe que existe el registro por lo que no se necesita crear, pero se necesita saber si lo sigue o no
    	
    	$consulta = "DELETE FROM Likes WHERE idUsuarios = ".$usuario_origen." AND idPublicaciones= ".$publicacion." ";
		mysqli_query($conexion,$consulta) or die (mysqli_error());
		echo 'XC';
	}
	else
	{
		$consulta = "INSERT INTO Likes(idLikes,idUsuarios,idPublicaciones) VALUES ('',".$usuario_origen.",".$publicacion.")";
		mysqli_query($conexion,$consulta) or die (mysqli_error());
		echo 'Exito';
	}
	mysqli_close($conexion);
}

?>