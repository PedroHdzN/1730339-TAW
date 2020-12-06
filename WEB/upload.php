<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

	include "dbConnect.php";
 
    $imagen= $_POST['foto'];
    $usuario_origen= $_POST['ORIGEN'];

    settype($usuario_origen, "integer");

    $nombre = 0;

    $sql = "SELECT * FROM Publicaciones";
    $result= mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($result)){
        $nombre = $mostrar['idPublicaciones'];
    }
    $nombre = $nombre+1;

    $consulta = "INSERT INTO Publicaciones(idPublicaciones,idUsuarios, Foto_Publicacion) VALUES ('',".$usuario_origen.",".$nombre.")";
	mysqli_query($conexion,$consulta) or die (mysqli_error());
    
    // RUTA DONDE SE GUARDARAN LAS IMAGENES
    $path = "uploads/$nombre.png";

    $actualpath = "http://instateam.webcindario.com/$path";

    file_put_contents($path, base64_decode($imagen));

    echo "SE SUBIO EXITOSAMENTE";
}

?>