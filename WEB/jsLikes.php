<?php
	include "dbConnect.php";

	$sql = "SELECT * FROM Likes";

	$result = mysqli_query($conexion,$sql);

	$json_array = array();
	$json_array['likes'] = array();

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($json_array['likes'], $row);
	}

	mysqli_close($conexion);

	echo json_encode($json_array);
?>