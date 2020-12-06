<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$usuario_origen= $_POST['ORIGEN'];
	$usuario_seleccionado= $_POST['DESTINO'];


	settype($usuario_origen, "integer");
	settype($usuario_seleccionado, "integer");

	require_once('dbConnect.php');

	$sql = "SELECT * FROM Seguidores WHERE idUsuarios_Original = ".$usuario_origen." AND idUsuarios_Buscado= ".$usuario_seleccionado." AND Estado = 0";
	$result = mysqli_query($conexion,$sql);

	$check = mysqli_fetch_array($result);

	if (isset($check)) {
		#echo 'Exito'; se sabe que existe el registro por lo que no se necesita crear, pero se necesita saber si lo sigue o no
    	
    	$consulta = "UPDATE Seguidores SET Estado=1 WHERE idUsuarios_Original = ".$usuario_origen." AND idUsuarios_Buscado= ".$usuario_seleccionado." ";
		mysqli_query($conexion,$consulta) or die (mysqli_error());

    	echo 'Exito';
	}
	else
	{
		$consulta = "UPDATE Seguidores SET Estado=0 WHERE idUsuarios_Original = ".$usuario_origen." AND idUsuarios_Buscado= ".$usuario_seleccionado." ";
		mysqli_query($conexion,$consulta) or die (mysqli_error());

		echo 'XC2';
	}
	mysqli_close($conexion);
}

?>