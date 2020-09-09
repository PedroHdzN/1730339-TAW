<?php 
	//invoca al controlador y modelo solicitado
	required_once "controllers/conttroller.php"
	required_once "models/model.php"

	//se crea un nuevo controlador llamando a la plantilla que mostrará al usuario
	$mvc = new MvcController();
	$mvc-> plantilla();


 ?>