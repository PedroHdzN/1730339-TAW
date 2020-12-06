<?php
	include "dbConnect.php";

	$sql = "SELECT * FROM Publicaciones ORDER BY idPublicaciones DESC";

	$result = mysqli_query($conexion,$sql);

	$json_array = array();
	$json_array['publicaciones'] = array();

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($json_array['publicaciones'], $row);
	}

	mysqli_close($conexion);

	echo json_encode($json_array);
?>