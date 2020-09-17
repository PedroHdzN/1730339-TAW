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

            //Método para INGRESO DE USUARIOS
            public function igresoUsuarioController(){
              if(isset($_POST["usuarioIngreso"])){
                $datosController = array("usuario"=>$_POST["usuarioIngreso"],
                                        "password"=>$_POST["passwordIngreso"]);
                  //Mandar valores del array al modelo
                  $respuesta = Datos::ingresoUsuarioModel($datosController,"usuarios");

                  //Recibe respuesta del modelo
                  if($respuesta["usuario"]==$_POST["usuarioIngreso"] && $respuesta["password"]
                  ==$_POST["passwordIngreso"]){
                    session_start();


                    $_SESSION["validar"]=true;
          					header("location:index.php?action=usuarios");
                  }else{
          					header("location:index.php?action=fallo");
          				}
              }
            }

            //Método vista usuarios
            public function vistaUsuariosController(){
              //Envío al modelo la variable de control y la tabla a donde se hará
              $respuesta = Datos::vistaUsuariosModel("usuarios");

              foreach($respuesta as $row => $item){

              echo '<tr>
                    <td>'.$item["usuario"].'</td>
                    <td>'.$item["contrasena"].'</td>
                    <td>'.$item["email"].'</td>
                    <td><a href="index.php?action=editar&id='.item["id"].'"<button> Editar </button></a></td>
                    <!--COLUMNA PARA BORRAR-->
                    <td><a href="index.php?action=usuarios&idBorrar='.item["id"].'"<button> Eliminar </button></a></td>

              </tr>';
              }
            }
          }


?>
