<?php

 // Es importante primero extablecer la conexion para despues hacer un query.
 include_once('conexion.php');
  $titulo = "hola Mundo";

 


?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title><?php echo $titulo; ?></title>
		<!--echo muestra lo almacenado en una variable-->
	</head>
	<body>
		<h1><?php echo $titulo; ?> </h1>
		
		<?php include_once('menu.php');?>

		<h3>VARIABLES POR GET</h3>

		<a href="resultado.php?nombre=Juanito">Variable por Get</a>

		<form action="resultado.php" method="POST">


			<label for="id">id</label>
			<input type="text" name="id" value="" id="id">

			<p><input type="submit" value="Enviar Variable"></p>

		</form>
			
</body>
</html>