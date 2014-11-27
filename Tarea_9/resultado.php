<?php

 // Es importante primero extablecer la conexion para despues hacer un query.
 include_once('conexion.php');
  $titulo = "RESULTADO GET Y POST";

 


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
		
		<?php include_once('menu.php');
			include_once('variables.php');
		?>

		<?php 
		echo "La variable pasada por GET es :" . $_GET['nombre'];

		echo "La Varible pasada por POST es :" . $_POST['id'];

		?>	
			
</body>
</html>