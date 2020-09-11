<?php
class MvcController{
public function plantilla(){
    include "views/template.php";
}

// metodo para mostrar el contenido de las paginas

public function enlacesPaginasController(){
  if(isset($_GET['action'])){
    $enlaces = $_GET['action'];
  }else{
    $enlaces="index";
  }
  $respuesta=Paginas::enlacesPaginasModel($enlaces);
  include $respuesta;
}

//Método para registro de usuarios
public function registroUsuarioController(){
  //Almaceno en una array los valores de la vista de registro
  $datosController = array("usuario"=>$_POST["usuarioRegistro"],
                "password"=>$_POST["passwordRegistro"],
                "email"=>$_POST["emailRegistro"]);
                //Envíamos los parametros al modelo para que procese el registro
          $respuesta = Datos::registroUsuarioModel($datosController,"usuarios");

          //Recibir la respuesta de modelo para saber qué sucedió(Sucess o error)
}       if($respuesta == "success"){
      header("location:index.php?action=ok");
        }else{
            header("location:index.php");
            }

}


?>
