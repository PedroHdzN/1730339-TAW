<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$usuario= $_POST['username'];
	$contra= $_POST['password'];

	require_once('dbConnect.php');

	$sql = "SELECT * FROM Usuarios WHERE User_Name= '".$usuario."' AND Contrasena= '".$contra."'";
	$result = mysqli_query($conexion,$sql);

	$check = mysqli_fetch_array($result);

	if (isset($check)) {
		echo 'Exito';
	}
	else
	{
		echo 'Usuario invalido';
	}
	mysqli_close($conexion);
}

?>