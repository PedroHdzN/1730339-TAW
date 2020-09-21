<?php

    class Paginas{
      public function enlacesPaginasModel($enlaces){
          if($enlaces== "ingresar" || $enlaces == "usuarios" || $enlaces == "editar" ||
              $enlaces == "salir"){
                $module = "views/".enlaces.".php";
              }
              elseif ($enlaces =="index") {
                $module ="views"/registro.php
              }

      }

   }

 ?>
