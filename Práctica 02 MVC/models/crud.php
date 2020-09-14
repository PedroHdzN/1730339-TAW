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

}
?>
