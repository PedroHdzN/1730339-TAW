<?php

require_once"conexion.php"
// modelo que permite el enlace de las paginas con las vistas
  class Datos extend Conexion{
    public function registroUsuarioModel($datosModel,$tabla){
      //Preparar el modelo para hacer los INSERT
      $stmt = Conexion::conectar()->prepare("INSER INTO $tabla(usuario,contrasena,email)
      VALUES (:usuario,:password,:email)");
      //prepare() Prepara una sentencia SQL para ser ejecutada por el método PDOStatement::execute();

      //bindParam() vincula el valor de una variable de PHP en un parámetro de sustitucion
      //con nombre o signo de interrogacion correspondiente. Es la sentencia usada para preparar un query de SQLite3

      $stmt->bindParam(":usuario",$datosModel["usuario"], PDO::PARAM_STR);
      $stmt->bindParam(":password",$datosModel["contrasena"], PDO::PARAM_STR);
      $stmt->bindParam(":email",$datosModel["email"], PDO::PARAM_STR);

      if($stmt-> execute()){
         return "succsess";
     }else{
         return "error";
       }

     // cerrrar las funciones de las sentencias de pdo

     $stmt ->close();
   }
    //Método Ingreso usuarios
    public function ingresoUsuarioModel($datosModel, $tabla){
      //Preparamos el PDO
      $stmt=Conexion::conectar()->prepare("SELECT usuario, contrasena FROM $tabla WHERE usuario = :usuario");
      $stmt->bindParam(":usuario", $datosModel["usuario"],PDO::PARAM_STR);
      //Ejecutamos la consulta en PDO
      $stmt->execute();
      //Retornamos el fetch que es el que obtiene una fila o posición de un array
      return $stmt->fetch();
      //Cerramos el PDO
      $stmt->close();

      }
      //Método para Vista Usuario (tabla)
      public function vistaUsuariosModel($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT id, usuario, contrasena, email FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
      }
        //Meétodo para Seleccionar usuarios
      public function editarUsuariosModel($datosModel, $tabla){
        //Select
        $stmt = Conexion::conectar()->prepare("SELECT id, usuario, contrasena, email FROM $tabla WHERE id = :id");
        $stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
      }

      //Método para ACTUALIZAR usuarios (UPDATE)
      public function actualizarUsuarioModel($datosModel, $tabla){
        //Prparar el Query
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET usuario = :usuario, contrasena = :password, email = :email
                                              WHERE id= :id");
            //Ejecutar el Query
        $stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datosModel["contrasena"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_STR);

        //preparar $respuesta
        if($stmt->execute()){
          return "sucess";
        }else{
          return "error"
        }
            //cerrar la conexion por PDOStatement
            $stmt->close;

      }

      public function borrarUsuarioModel($datosModel, $tabla){
        //Preparar el Query para Eliminar
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

        $stmt->bindParam(":id", $datosModel, PDO::PARAM_STR);
        
      }

    }
?>
