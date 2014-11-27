<?php
	include_once ("variables.php");
	 $peliculas = mysql_query("SELECT * FROM peliculas");
	 $titulo_pagina = "Las mejores peliculas";
	 $id= $_GET['id'];
	 $pelicula =mysql_query("SELECT * FROM peliculas WHERE id=$id");

	 while ($row = mysql_fetch_array($pelicula)) {

	 	$titulo=$row['titulo'];
	 	$sinopsis=$row['sinopsis'];
	 	$fecha_estreno=$row['fecha_de_estreno'];
		$poster=$row['poster'];	
		};

?>

<!DOCKTYPE HTML>
<html>

<head>
	<?php include_once("head.php"); ?>

</head>

<body>
	<header>
		<h1><?php echo $titulo_sitio; ?></h1>

		<?php include_once("menu.php"); ?>
		<h2><?php echo $titulo; ?></h2>

		<p><?php echo $sinopsis; ?></p>
		<p><?php echo $fecha_estreno; ?></p>

		<img src="img/peliculas/poster/<?php echo $poster; ?>"/>


	</header>
	
	

</body>


</html>