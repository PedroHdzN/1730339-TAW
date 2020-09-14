<?php
	//invoca al controlador y modelo solicitado
		require_once "controllers/enlaces.php";
	require_once "controllers/controller.php";
	require_once "models/crud.php";

	//se crea un nuevo controlador llamando a la plantilla que mostrará al usuario
	$mvc = new MvcController();
	$mvc-> plantilla();


 ?>
