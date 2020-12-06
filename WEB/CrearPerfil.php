<?php
include "dbConnect.php";

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$consulta = "INSERT INTO Usuarios(idUsuarios, Nombre_Usuario, User_Name, Correo, Contrasena, Foto_Perfil) VALUES ('','".$nombre."','".$usuario."','".$correo."','".$contrasena."','xc')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>