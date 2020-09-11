<?php
// modelo que permite el enlace de las paginas con las vistas
class EnlacesPaginas{
public function enlacesPaginasModel($enlacesModel){
    // retorno de los valores de la variable del get
    if($enlacesModel == "nosotros" || $enlacesModel == "servicios" || $enlacesModel == "contactenos"){
        // se muestra la pagina segun la peticion del get
       $module = "views/".$enlacesModel.".php";
    }else{
        $module ="views/inicio.php";
    }

    return $module;
}

}
?>
