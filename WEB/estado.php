<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$usuario_origen= $_POST['ORIGEN'];
	$usuario_seleccionado= $_POST['DESTINO'];


	settype($usuario_origen, "integer");
	settype($usuario_seleccionado, "integer");

	require_once('dbConnect.php');

	$sql = "SELECT * FROM Seguidores WHERE idUsuarios_Original = ".$usuario_origen." AND idUsuarios_Buscado= ".$usuario_seleccionado." ";
	$result = mysqli_query($conexion,$sql);

	$check = mysqli_fetch_array($result);

	if (isset($check)) {
		#echo 'Exito'; se sabe que existe el registro por lo que no se necesita crear, pero se necesita saber si lo sigue o no
    	
    	$sql2 = "SELECT * FROM Seguidores WHERE idUsuarios_Original = ".$usuario_origen." AND idUsuarios_Buscado= ".$usuario_seleccionado." AND Estado = 1";
		$result2 = mysqli_query($conexion,$sql2);

		$check2 = mysqli_fetch_array($result2);

    	if (isset($check2)) {
    		echo 'Exito';
    	}
    	else
    	{
    		echo 'XC';
    	}
	}
	else
	{
		$consulta = "INSERT INTO Seguidores(idSeguidores,idUsuarios_Original, idUsuarios_Buscado, Estado) VALUES ('',".$usuario_origen.",".$usuario_seleccionado.",0)";
		mysqli_query($conexion,$consulta) or die (mysqli_error());
		echo 'XC2';
	}
	mysqli_close($conexion);
}

?>