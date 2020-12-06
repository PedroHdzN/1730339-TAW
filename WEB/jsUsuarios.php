<?php
	include "dbConnect.php";

	$sql = "SELECT * FROM Usuarios";

	$result = mysqli_query($conexion,$sql);

	$json_array = array();
	$json_array['usuarios'] = array();

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($json_array['usuarios'], $row);
	}

	mysqli_close($conexion);

	echo json_encode($json_array);
?>