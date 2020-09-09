<?php 

class MvcController{


//Metodo para llamar a la plantilla template
	public function plantilla(){
		include "views/template.php"
	}


	//Metodo para mostrar el contenido de las páginas
	public function enlacesPaginasController(){
		//Verificar la variable 'action' que viene desde los URL de navegación.
		if(isset($_GET["action"])){
			$enlacesController = $_GET["action"];
		}
		else{
			$enlacesController = "index";
		}
		//Mandar el parámetro de "enlacesController" al modelo EnlacesPAginas en su propiedad enlacesPaginasModel.
		$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
		include $respuesta;

	}

}

 ?>