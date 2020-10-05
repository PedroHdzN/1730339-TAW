<h1> REGISTRO DE USUARIO </h1>
<form method="POST">
	<input type="text" placeholder="ISBN" name="usuarioRegistro" required>
	<input type="text" placeholder="Nombre" name="passwordRegistro" required>
	<input type="text" placeholder="Autor" name="emailRegistro" required>
	<input type="text" placeholder="Editorial" name=" " required>
  <input type="text" placeholder="Edicion" name=" " required>
	<input type="text" placeholder="Año" name=" " required>
	<input type="submit" value="Enviar">
</form>

<?php
	$ingreso = new MvcController();
	$ingreso -> registroUsuarioController();

	//Verificar la URL correcta
	if(isset($_GET["action"])) {
		if($_GET["action"] == "ok") {
			echo "Registro exitoso";
		}
	}
?>
