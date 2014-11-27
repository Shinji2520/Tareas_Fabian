<?php
$titulo = "Hola mundo hola";
$nombre ="Diseño Digital";
$clave = 94;
$revoe =12341251;

?>



<!DOCKTYPE HTML>
<html>

<head>
	<meta charset="UTF-8">
	<title> <?php echo $titulo; ?> </title>
</head>

<body>
	<h1> <?php echo $nombre; echo $clave; echo $revoe; ?> </h1>

	<h1> <?php echo $titulo; ?> </h1>

	<ul>
		<li><?php echo $nombre; ?></li>
		<li><?php echo $clave; ?></li>
		<li><?php echo $revoe; ?></li>
	</ul>
</body>

</html>