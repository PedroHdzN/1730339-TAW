<?php
class MvcController{
public function plantilla(){
    include "views/template.php";
}

// metodo para mostrar el contenido de las paginas

public function enlacesPaginasController(){
    //include "views/template.php";
    //verificar la variable action que viene desde los url
    //de navegación
    if(isset($_GET["action"])){
        $enlacesController= $_GET["action"];
    }else{
        $enlacesController="index";
    }
    //mandar el parametro de enlaces controler al modelo
    //EnlacesPaginas en su propiedad enlacesPaginasModel
    $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
    include $respuesta;
}


}








?>
