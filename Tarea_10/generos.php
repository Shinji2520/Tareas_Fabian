<?php
	
	
	include_once ("variables.php");

	 $peliculas = mysql_query("SELECT * FROM peliculas");
	 
	 $titulo_pagina = "Todos los generos";
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
	</header>
	

</body>


</html>