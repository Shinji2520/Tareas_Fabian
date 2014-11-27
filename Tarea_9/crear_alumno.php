<?php

 // Es importante primero extablecer la conexion para despues hacer un query.
 include_once('conexion.php');
  $titulo = "Crear alumno";

 


?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title><?php echo $titulo; ?></title>
		
	</head>
	<body>
		<h1><?php echo $titulo; ?> </h1>
		
		<?php include_once('menu.php');?>

		

		

		<form action="insetar_alumno.php" method="POST">


			<label for="nombre">nombre</label>
			<input type="text" name="nombre" value="" id="nombre"><br>
			<br>
			<label for="apellido_paterno">apellido paterno</label>
			<input type="text" name="apellido_paterno" value="" id="apellido_paterno"><br>
			<br>
			<label for="apellido_materno">apellido materno</label>
			<input type="text" name="apellido_materno" value="" id="apellido_materno"><br>
			<br>
			<label for="edad">edad</label>
			<input type="text" name="edad" value="" id="edad"><br>
			<br>
			<label for="cuenta">numero de cuenta</label>
			<input type="text" name="cuenta" value="" id="cuenta"><br>
			<br>
			<label for="telefono">telefono</label>
			<input type="text" name="telefono" value="" id="telefono"><br>
			<br>
			<label for="direccion">direccion</label>
			<input type="text" name="direccion" value="" id="direccion"><br>


			<p><input type="submit" value="Enviar Variable"></p>

		</form>
			
</body>
</html>