<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <body>
    <form method="post">
    <div class="row">
        <div class="col">
        <label for="" class="control-label">Nombre</label>
        <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="John Deer">
        </div>
    </div>
    <div class="form-group">
        <button type="submit" name="test" id="test" value="RUN"  class="btn btn-primary">Imprimir</button>
    </div>

</form>
</body>
</html>
<?php
if(array_key_exists('test',$_POST)){
   $Nombre = $_POST['Nombre'];
   $Numrandom = rand (  1 , 30 );
   echo $Numrandom;
   echo "<br/>";
   for($i=1; $i<=$Numrandom; $i++){
     echo $i, " ", $Nombre;
     echo "<br/>";
   }
   for($i=1; $i<=$Numrandom; $i++){
     echo $i, " ", strrev($Nombre);
     echo "<br/>";
   }
}
?>
